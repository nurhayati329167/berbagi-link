   <!--begin::Base Scripts -->
   <script src="https://berbagi.link/js/ibadahApp.js?v=13"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <script src="https://berbagi.link/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
   <script src="https://berbagi.link/assets/demo/default/base/scripts.bundle.js" type="text/javascript">
   </script>
   <script src="https://berbagi.link/plugins/swiper-master/js/swiper.min.js"></script>
   <script>
$(document).on("click", ".berbagi-link-super-container .user-container .location-main-container", function(
    event) {
    $("#berbagi-link-location-container").css("display", "flex");
})
$(document).on("click", "#berbagi-link-location-container", function(event) {
    $("#berbagi-link-location-container").css("display", "none");
})
$(document).on("click", "#berbagi-link-location-container .modal-location-container", function(event) {
    event.stopPropagation()
})
   </script>
   <script>
var swiper = new Swiper(".mySwiper", {
    watchSlidesProgress: true,
    slidesPerView: 3,
    spaceBetween: 30,


});
   </script>