<!-- ALL JS FILES -->
<script src="{{ asset('dinner/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('dinner/js/popper.min.js') }}"></script>
	<script src="{{ asset('dinner/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{ asset('dinner/js/jquery.superslides.min.js') }}"></script>
	<script src="{{ asset('dinner/js/images-loded.min.js') }}"></script>
	<script src="{{ asset('dinner/js/isotope.min.js') }}"></script>
	<script src="{{ asset('dinner/js/baguetteBox.min.js') }}"></script>
	<script src="{{ asset('dinner/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('dinner/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('dinner/js/custom.js') }}"></script>

	<script src="{{ asset('dinner/js/jquery.mapify.js') }}"></script>
	<script src="{{ asset('dinner/js/form-validator.min.js') }}"></script>

	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: 'Live Dinner Restaurant'
				}
			]
		});
	</script>
 <script>
    window.addEventListener('alert', event => {
        toastr[event.detail.type](event.detail.message,
            event.detail.title ?? ''), toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
        }
    });
</script>

        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@livewireScripts

