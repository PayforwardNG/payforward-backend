
$(document).ready(function() {
faqLoads();


    $("#save").click(function(event) {                
        event.preventDefault();
        $('#content').load('././returns.php', function(response, status, callback){
        
        if (status == 'error') {
            var msg = 'An error occurred ';
            alert (msg);
        }
        });

    });

    $("#fees").click(function(event) {                
        event.preventDefault();
        $('#content').load('././fees.php', function(response, status, callback){
        
        if (status == 'error') {
            var msg = 'An error occurred ';
            alert (msg);
        }
        });

    });

    $("#safety").click(function(event) {                
        event.preventDefault();
        $('#content').load('././safety.php', function(response, status, callback){
        
        if (status == 'error') {
            var msg = 'An error occurred ';
            alert (msg);
        }
        });

    });

    $("#withdrawals").click(function(event) {                
        event.preventDefault();
        $('#content').load('././withdrawals.php', function(response, status, callback){
        
        if (status == 'error') {
            var msg = 'An error occurred ';
            alert (msg);
        }
        });

    });

    $("#leasing").click(function(event) {                
        event.preventDefault();
        $('#content').load('././leasing.php', function(response, status, callback){
        
        if (status == 'error') {
            var msg = 'An error occurred ';
            alert (msg);
        }
        });

    });

    $("#general").click(function(event) {                
        event.preventDefault();
        $('#content').load('././general.php', function(response, status, callback){
        
        if (status == 'error') {
            var msg = 'An error occurred ';
            alert (msg);
        }
        });

    });


    function faqLoads() {
    $('#content').load('././general.php', function(response, status, callback){   
            if (status == 'error') {
                var msg = 'An error occurred ';
                alert (msg);
            }
        });
    }


    let periodicPlan = document.getElementById("periodic");
    let fixedInvestment = document.getElementById("fixed-investment");
    let lifeGoal = document.getElementById("life-goals");

    fixedInvestment.style.display = "none";
    lifeGoal.style.display = "none";

    $(".fixed-plan").click(function(event) {                
        event.preventDefault();
        periodicPlan.style.display = "none";
        fixedInvestment.style.display = "block";
        lifeGoal.style.display = "none";
    });

    $(".life-goals").click(function(event) {                
        event.preventDefault();
        lifeGoal.style.display = "block";
        fixedInvestment.style.display = "none";
        periodicPlan.style.display = "none";
    });

    $(".periodic-plan").click(function(event) {                
        event.preventDefault();
        fixedInvestment.style.display = "none";
        lifeGoal.style.display = "none";
        periodicPlan.style.display = "block";
    });

    var $range = $('.range');

    $range.each(function() {
    
      var $thumb = $(this).next('.range-thumb');
      var max = parseInt(this.max, 10);
      var tw = 100; // Thumb width. See CSS
    
      $(this).on('input input.range', function() {
    
        var w = $(this).width();
        var val = parseInt(this.value, 10);
        var txt = val >= max ? '100' : val;
        var xPX = val * (w - tw) / max; // Position in PX
        // var xPC = xPX * 100 / w;     // Position in % (if ever needed)
    
        $thumb.css({left: xPX}).attr("data-val", txt);
    
      });
    
    });
    
    $range.trigger('input.range'); // Calc on load
    $(window).on("resize", () => $range.trigger("input.range")); // and on resize
});

let interPlan = document.getElementById("inter-plan");
let intraPlan = document.getElementById("intra-plan");

intraPlan.style.display = "none";

function displayR () {
    interPlan.style.display = "none";
    intraPlan.style.display = "block";
}

function displayE () {
    interPlan.style.display = "block";
    intraPlan.style.display = "none";
}




