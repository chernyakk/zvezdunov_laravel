var swiper = new Swiper('.swiper-container', {
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

$(document).ready(function() {

  let modal = {
    self: $("#modal"),

    showModal: function(content){
      this.self.find("#innerModal").html(content);
      this.self.fadeIn(200);
      this.self.css("display","flex");
      $('body').css("overflow","hidden");
      $('body').removeClass('scrolled');
    },
    hideModal: function(){
      this.self.fadeOut(200);
      $('body').css("overflow","auto");
      this.self.find("#innerModal").html('');
    }
  };

  $(".box-show").on("click",function(e){
    let id = $(this).data("id");
    let content = $("#cont"+id).html();
    modal.showModal(content);
  });

  $("#modal").on("click",function(e){
    if($(e.target).attr("id") === "modal" || $(e.target).hasClass("closeModal") || $(e.target).hasClass("modal__btn")) {
      modal.hideModal();
    }else{
      return false;
    }
  });

  let modalCall = {
    self: $("#modalCall"),

    showModalCall: function(content){
      this.self.find("#innerModalCall").html(content);
      this.self.fadeIn(200);
      this.self.css("display","flex");
      $('body').css("overflow","hidden");
      $('body').removeClass('scrolled');
    },
    hideModalCall: function(){
      this.self.fadeOut(200);
      $('body').css("overflow","auto");
      this.self.find("#innerModalCall").html('');
    }
  };

  $(".call-back__btn").on("click",function(e){
    $('#modal').hide();
    let content = $("#cont").html();
    modalCall.showModalCall(content);
  });

  $("#modalCall").on("click",function(e){
    if($(e.target).attr("id") === "modalCall" || $(e.target).hasClass("closeModalCall")) {
      modalCall.hideModalCall();
    }else{
      return false;
    }
  });

	$(".person__img-1")
        .mouseover(function() {
          $(".person__img-1").css("transform","scale(1.05)");
          $(".person__img-1").css("padding-bottom","14px");
          $(".person__img-2").css("margin-top","14px");
					$(".person-info-1").css("opacity", "1");
        })
        .mouseout(function(){
          $(".person__img-1").css("transform","scale(1)");
          $(".person__img-1").css("padding-bottom","0");
          $(".person__img-2").css("margin-top","0");
					$(".person-info-1").css("opacity", "0");
				});

	$(".person__img-2")
        .mouseover(function() {
          $(".person__img-2").css("transform","scale(1.05)");
          $(".person__img-2").css("padding-bottom","14px");
          $(".person__img-1").css("margin-top","14px");
					$(".person-info-2").css("opacity", "1");
        })
        .mouseout(function(){
          $(".person__img-2").css("transform","scale(1)");
          $(".person__img-2").css("padding-bottom","0");
          $(".person__img-1").css("margin-top","0");
					$(".person-info-2").css("opacity", "0");
				});

	$("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });

	$(window).on("scroll", function () {
    let scrolled = $(this).scrollTop();
    if( scrolled > 0 ) {
        $('body').addClass('scrolled');
    }
    if( scrolled <= 0 ) {
        $('body').removeClass('scrolled');
    }
});

});

