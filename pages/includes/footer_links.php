<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>



<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script async defer>
    // Subs Status
    $( document ).ready(function() {
    $(".nosubscriptions").hide();

        if($("#substats").length){
            // console.log( "visible!" );
            $(".nosubscriptions").hide();
        } else{
            // console.log( "hidden!" );
            $(".nosubscriptions").show();
        }
    });
</script>

<script>
function copyClip() {
  var copyText = document.getElementById("myrefCode");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to Clipboard";
}
</script>