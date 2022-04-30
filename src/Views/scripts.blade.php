<script>
	var menus = {
		"oneThemeLocationNoMenus" : "",
		"moveUp" : @lang("menu-builder::move_up"),
		"moveDown" : @lang("menu-builder::move_down"),
		"moveToTop" : @lang("menu-builder::move_top"),
		"moveUnder" : @lang("menu-builder::move_under"),
		"moveOutFrom" : @lang("menu-builder::move_out_from"),
		"under" : @lang("menu-builder::under"),
		"outFrom" : @lang("menu-builder::out_from"),
		"menuFocus" : @lang("menu-builder::menu_focus"),
		"subMenuFocus" : @lang("menu-builder::submenu_focus")
	};
	var arraydata = [];     
	var addcustommenur= '{{ route("menus.items.create") }}';
	var updateitemr= '{{ route("menus.items.update")}}';
	var generatemenucontrolr= '{{ route("menus.update") }}';
	var deleteitemmenur= '{{ route("menus.items.delete") }}';
	var deletemenugr= '{{ route("menus.delete") }}';
	var createnewmenur= '{{ route("menus.create") }}';
	var csrftoken="{{ csrf_token() }}";
	var menuwr = "{{ url()->current() }}";

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': csrftoken
		}
	});
</script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/scripts2.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/menu.js')}}"></script>