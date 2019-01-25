<!DOCTYPE html>
<html class="no-js">

<head>
	<link rel="stylesheet" type="text/css" href="css/usertable.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="demo-2">

		<header class="header">
			<h1>User Details <span>We are here for a CHANGE</span></h1>
		</header>
			<div class="grid">

				</div>
				<!-- /grid -->
				<div class="preview">
				  <button class="action action--close"><span>Close</span></button>
				  <div class="description description--preview"></div>
				</div>

				<script src="./jsd/imagesloaded.pkgd.min.js"></script>
				<script src="./jsd/masonry.pkgd.min.js"></script>
				<script src="./jsd/classie.js"></script>
				<script src="./jsd/usertable.js"></script>
				<script src="./jsd/modernizr-custom.js"></script>
				<script>
				(function() {
				var support = { transitions: Modernizr.csstransitions },
				  // transition end event name
				  transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				  transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				  onEndTransition = function( el, callback ) {
				    var onEndCallbackFn = function( ev ) {
				      if( support.transitions ) {
				        if( ev.target != this ) return;
				        this.removeEventListener( transEndEventName, onEndCallbackFn );
				      }
				      if( callback && typeof callback === 'function' ) { callback.call(this); }
				    };
				    if( support.transitions ) {
				      el.addEventListener( transEndEventName, onEndCallbackFn );
				    }
				    else {
				      onEndCallbackFn();
				    }
				  };

				new GridFx(document.querySelector('.grid'), {
				  imgPosition : {
				    x : -0.5,
				    y : 1
				  },
				  onOpenItem : function(instance, item) {
				    instance.items.forEach(function(el) {
				      if(item != el) {
				        var delay = Math.floor(Math.random() * 50);
				        el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
				        el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
				        el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
				        el.style.transform = 'scale3d(0.1,0.1,1)';
				        el.style.opacity = 0;
				      }
				    });
				  },
				  onCloseItem : function(instance, item) {
				    instance.items.forEach(function(el) {
				      if(item != el) {
				        el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
				        el.style.transition = 'opacity .4s, transform .4s';
				        el.style.WebkitTransform = 'scale3d(1,1,1)';
				        el.style.transform = 'scale3d(1,1,1)';
				        el.style.opacity = 1;

				        onEndTransition(el, function() {
				          el.style.transition = 'none';
				          el.style.WebkitTransform = 'none';
				        });
				      }
				    });
				  }
				});
				})();
				</script>

				<script src="./ajaxrequest/showuser.js"></script>


				</body>

				</html>
