// Veralteter Prototype
// Neue Version in Angular


  // get DOM Elements
  var error = false
  var allInputs = $('input');
  var allBriefingInputs = $(".briefing-summary input")
  var defaultRateInput = $(".defaultRate")
  var allRates = $("input.right")
  var counterValue = $('span.counter-value')
  var totalEffortSpan = $('span.total-effort')
  var totalPriceSpan = $('span.section-sum-money');
  var totalTimeSpan = $('span.section-sum-time');
  var averageRateSpan = $('span.average-rate');
  var totalCalculatet = $('div.total-calculatet')
  var totalPauschal = $('div.total-pauschal')
  var linkPauschal = $("#link-pauschal")
  var linkTime =  $("#link-time")
  var settingsTime = $("#settings-time")
  var settingsPauschal = $("#settings-pauschal")
  var pauschalPriceInput = $('input[name="pauschal-price"]');
  var mwstPartSpan = $('span.mwst-part');

// Count section-amount
var numberOfSections = $('div[class^="briefing-section"]').length
console.log(numberOfSections)


  // View Time / Pauschal Method
  linkPauschal.click(function(e){
    settingsTime.slideUp("slow")
    settingsPauschal.slideDown("slow")
    linkPauschal.addClass('active')
    linkTime.removeClass('active')
    allBriefingInputs.hide("slow")
    totalCalculatet.slideUp("slow")
    totalPauschal.slideDown("slow")
    totalTimeSpan.slideUp("slow")
    totalPriceSpan.slideUp("slow")
    e.preventDefault();
  });

  linkTime.click(function(e){
    settingsPauschal.slideUp("slow")
    settingsTime.slideDown("slow")
    linkTime.addClass('active')
    linkPauschal.removeClass('active')
    allBriefingInputs.show("slow")
    totalCalculatet.slideDown("slow")
    totalPauschal.slideUp("slow")
    totalTimeSpan.slideDown("slow")
    totalPriceSpan.slideDown("slow")
    pauschalPriceInput.val(0)
    e.preventDefault();
  });

// When input Change
allInputs.change(function() {

// if Method = Pauschal
var pauschalPrice = parseInt(pauschalPriceInput.val());

if (pauschalPrice != 0) {
  var mwst2 = ((parseInt($("input[name=mwst2]").val()))/100)+1
  pauschalPriceFinal = Math.round(pauschalPrice*mwst2)
  var mwst2Value = pauschalPriceFinal - pauschalPrice
  mwstPartSpan.text(mwst2Value)
  counterValue.text(pauschalPriceFinal)
  return
}

//change default rate
var defaultRateValue = defaultRateInput.val()
var defaultRateInt = parseInt(defaultRateValue)
var allRates = $("input.right")

$.each(allRates, function( index, value ) {
  $(this).attr('value',defaultRateInt)
});

// reset NaN Error
var error = false

// Check all inputs to INT
$.each(allInputs, function( index, value ) {

  InputInt = parseInt($(this).val())

  if (isNaN(InputInt)) {
    $(this).addClass('error')
    $(this).val(0)
    error = true
  }
  else {
    $(this).removeClass('error')
  }
});

if (error == true) {
  alert("Nur numerische Werte zulässig")
}

// Calculate mwst & Discount Values
var mwst = ((parseInt($("input[name=mwst]").val()))/100)+1
var discount = 1-((parseInt($("input[name=discount]").val()))/100)

// Reset temporary variables
var sectionCount = 1;
var itemCount = 1;
var efforts = 0;
var rates = 0;
var rowSum = 0;
var sectionSum = 0;
var sectionEffort = 0
var totalSum = 0;
var totalEffort = 0;
var totalEffort = 0;

    // Run through sections
    for (sectionCount=1;sectionCount<(numberOfSections+1);sectionCount++) {

      var sectionEffort = 0
      var sectionSum = 0

              // get Number of Items in current section
              var numberOfItemsInSection = $('.briefing-section-'+sectionCount).find(".left").length;

              // run through Items from sections
              for (itemCount=1;(itemCount<numberOfItemsInSection+1);itemCount++) {
                var efforts = $(".effort-"+sectionCount+"-"+itemCount)
                var rates = $(".rate-"+sectionCount+"-"+itemCount)
                var rowSum = parseInt(efforts.val()) * parseInt(rates.val())

                // check if rowsum is a number (otherweise NaN Error)
                if (!isNaN(rowSum)) {
                  sectionSum += rowSum
                  sectionEffort += parseInt(efforts.val())
                }
              }
              // Get right Section Sum-Field
              var sectionSumMoney = $("span.section-sum-"+sectionCount);
              var sectionSumTime = $("span.section-time-"+sectionCount);

              // Display Section Sum
              sectionSumMoney.text(sectionSum);
              sectionSumTime.text(sectionEffort);

              // Get Section Sum to calculate price spread
              var sectionSumInhalt = parseInt($('span.section-sum-1').text())
              var sectionSumFunktionen = parseInt($('span.section-sum-2').text())
              var sectionSumDesign = parseInt($('span.section-sum-3').text())
              var sectionSumService = parseInt($('span.section-sum-4').text())

              // Build Total Sum
              totalSum += sectionSum
              totalEffort += sectionEffort
            }

            // add Discount / Fees
            var totalSumFinal = Math.round((totalSum*discount)*mwst)
            var totalSumFinal = Math.round((totalSum*discount)*mwst)

            // Calculate Average Rate
            var averageRate = parseInt(totalSumFinal/totalEffort)
            var mwstValue = Math.round((totalSum*discount*mwst) - totalSum*discount)

            // Set total Counters
            mwstPartSpan.text(mwstValue)
            averageRateSpan.text(averageRate)
            totalEffortSpan.text(totalEffort)
            counterValue.text(totalSumFinal)

            // Round Problem when animating
            // jQuery({ Counter: 0 }).animate({ Counter: totalSumFinal }, {
              //   duration: 500,
              //   easing: 'swing',
              //   step: function () {
                //     counterValue.text(Math.round(this.Counter));
                //   }
                // });

});
