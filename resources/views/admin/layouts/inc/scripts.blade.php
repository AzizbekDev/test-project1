<script src="/admin/js/jquery.min.js" type="text/javascript"></script>
<script src="/admin/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Checkbox, Radio & Switch Plugins -->
<script src="/admin/js/bootstrap-checkbox-radio.js"></script>
<!--  Charts Plugin -->
<script src="/admin/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/admin/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="/admin/js/paper-dashboard.js"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="/admin/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function(){
demo.initChartist();
$.notify({
icon: 'ti-gift',
message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."
},{
type: 'success',
timer: 4000
});
});
</script>