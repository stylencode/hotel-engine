$(document).ready(function() {


  $('#hp-slider__testimonial').slick({
    arrows: false,
    dots: true,
    autoPlay: true,
    autoplaySpeed: 6000
  });

  // manually start slick Testimonials slider
  $('#hp-slider__testimonial').slick('slickPlay');


  
  $('#hp-slider__testimonial2').slick({
    arrows: false,
    dots: true,
    autoPlay: true,
    autoplaySpeed: 6000
  });

  // manually start slick Mobile Testimonials slider
  $('#hp-slider__testimonial2').slick('slickPlay');



 $('#hp-slider__logos').slick({
    arrows: true,
    dots: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000
   });


   $('#hp-slider__logos').slick('refresh');



  $('#slideshow-lodging-main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '#slideshow-lodging-thumbnails',
    autoplay: true,
    autoplaySpeed: 6000
  });

  $('#slideshow-lodging-thumbnails').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '#slideshow-lodging-main',
    dots: true,
    focusOnSelect: true,
    vertical: true
  });



//PRELOADER
	$('#preloader').delay(1500).fadeOut('slow'); 
	$('#status').fadeOut(5000); 
	$('body').delay(1500).css({'overflow':'visible'});


//MOBILE NAVIGATION
	$(".icon").click(function () {
	$(".mobilenav").fadeToggle(500);
	$(".top-menu").toggleClass("top-animate");
	$(".mid-menu").toggleClass("mid-animate");
	$(".bottom-menu").toggleClass("bottom-animate");
	});


//SMOOTH THESE NAV LINKS
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                        anchor.addEventListener('click', function (e) {
                            e.preventDefault();

                            document.querySelector(this.getAttribute('href')).scrollIntoView({
                                behavior: 'smooth'
                            });
                        });
                    });
                    var $root = $('html, body');
                        $('a[href^="#"]').click(function() {
                            var href = $.attr(this, 'href');
                            $root.animate({
                                scrollTop: $(href).offset().top
                            }, 500, function () {
                                window.location.hash = href;
                            });
                            return false;
                        });


//DO STUFF ON SCROLL				
			$(window).scroll(function() {
					if ($(this).scrollTop() == 0) {
						$('HEADER').css({
								'box-shadow': 'none' });
					}
					else {
						$('header').css({
								'box-shadow': '0px 2px 10px rgba(0, 0, 0, 0.15)' });
					}
				});



//SCROLL REVEAL
				
				window.sr = ScrollReveal();
                sr.reveal('#logos .logo-single img');
				sr.reveal('h3');
				sr.reveal('h4');
				sr.reveal('h5');
				sr.reveal('#solution-icons .solution-single');
				sr.reveal('#logorow-push .logorow_single img');
				sr.reveal('#signup #signup-info img.abs');
				sr.reveal('.mobile-show .lodginginfo-single');
	




// MARKETO FORM HOMEPAGE

                $('#reg-form').ready(function() { /* code here */  /*alert ("form ready");*/ loadScripts(); });

                
                function loadScripts(){
   
                       // config section - customize for your org
                      var config = {
                        instanceHost: "//app-ab35.marketo.com",
                        munchkinId: "763-KXV-605",
                        formidStack: [1026, 1028],
                        onFinalSuccess: function(vals, thankYouURL) {
                          /* whatever you want to do after the final form is submitted */
                        },
                        insertInsideSelector: "#hp-container-wrap"
                        /*insertBeforeSelector : null*/
                      }

                      /* --- NO NEED TO TOUCH ANYTHING BELOW THIS LINE */

                      // utility fns
                      var injectMktoForm = function(parentEl, insertBeforeEl, instanceHost, munchkinId, formid, onReady) {
                        var formEl = document.createElement('FORM');
                        formEl.id = 'mktoForm_' + formid;
                        try {
                          parentEl.insertBefore(formEl, insertBeforeEl);

                        } catch (e) {
                          parentEl.appendChild(formEl)
                        }
                        MktoForms2.loadForm.apply(MktoForms2, Array.prototype.slice.apply(arguments, [2]));
                      }

                                            

                      var ejectElement = function(formEl) {
                        formEl.parentNode.removeChild(formEl);
                        //console.log("eject "+formEl);
                      }

                      var arrayPushGet = function(ary, pushable) {
                        return ary[ary.push(pushable) - 1];
                        // console.log("array push "+pushable);
                      }

                      // allow runtime override of starting form ID
                      var startFormId = +document.location.hash.substring(1),
                        startFormIndex = Math.max(config.formidStack.indexOf(startFormId),0);

                      config.formidStack = config.formidStack.slice(startFormIndex);

                      console.log("currently on: #"+config.formidStack);
                      // main work
                      var formParentEl = document.querySelector(config.insertInsideSelector) || document.body,
                        formEl = formParentEl.querySelector(config.insertBeforeSelector) || null,
                        formidInitialCount = config.formidStack.length,
                        formElStack = [],
                        formid;

                      var nextForm = function(values, thankYouURL) {
                        if (formid = config.formidStack.shift()) {
                          injectMktoForm(formParentEl, formEl, config.instanceHost, config.munchkinId, formid,

                            function(form) {



                              if (formEl) {
                                // nothing to eject on initial run
                                ejectElement(formElStack.shift());
                                form.addHiddenFields({
                                  Email: values.Email
                                });
                              }

                              formEl = arrayPushGet(formElStack, form.getFormElem()[0]);
                              formParentEl = formEl.parentNode;


                              var progressEl = document.createElement('PROGRESS');
                              if (progressEl) {
                                progressEl.style.width = '100%';
                                progressEl.setAttribute('max', formidInitialCount);
                                progressEl.setAttribute('value', formidInitialCount - config.formidStack.length);
                                formEl.insertBefore(progressEl, formEl.firstChild);
                              }

                              form.onSuccess(config.formidStack.length ? nextForm : config.onFinalSuccess);

                              if (!config.formidStack.length)
                              {
                                console.log("last step ");

                                $('.main-step').hide();
                                $('.second-step').show();

                              }
                                                            

                            });

                          // don't forward to ThankYouURL
                          return false;
                        }
                      }

                      nextForm(); // first call will initialize





                    };



				
});



