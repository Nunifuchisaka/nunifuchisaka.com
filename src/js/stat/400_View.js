STAT.View = Backbone.View.extend({
  
  initialize: function(){
    _.bindAll(this, 'render');
    
    this.template = {
      stat: _.template( $('#stat_template').html() )
    }
    
    this.collection.fetch({
      url: 'https://stat.ink/api/v1/battle?screen_name=nunifuchisaka',
      success: this.render
    });
    
  },
  
  render: function(){
    var self = this;
    var html = this.collection.map(function(model, index){
      console.log(index, model.toJSON());
      return self.template.stat( model.toJSON() );
    }).join('');
    
    this.$el.html(html);
    return this;
  }
  
});