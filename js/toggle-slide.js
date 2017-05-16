(function(){

  var arrowReplace = {
    init: function(){
      this.cacheDom();
      this.bindEvents();
    },
    cacheDom: function(){
      this.$el = jQuery('.arrow-collapse');
    },
    bindEvents: function(){
      this.$el.on('click', this.toggleArrow);
    },
    toggleArrow: function(){
      jQuery(this).children().toggleClass('fa fa-angle-down').addClass('fa fa-angle-up');
    }
  };

  arrowReplace.init();

})();
