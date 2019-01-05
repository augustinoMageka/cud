new Vue({
	el: '#app',
	methods: {
		submit: function($id){
			document.getElementById($id).submit();
		}
	}
});