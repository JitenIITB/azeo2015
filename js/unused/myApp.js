(function(){
	var app=angular.module('AZeo',[]);

	app.controller('LandingController',function(){


	});

	app.controller('AboutController',function(){

	});

	app.controller('ContactUsController',function(){
			this.pics=theme;
	});

	app.controller('MenuController',function(){
			this.tab=1;

			this.selectTab=function(setTab) {
				this.tab=setTab;
			};

			this.isSelected=function(checkTab){
				return this.tab===checkTab;
			};
	}); 

})();