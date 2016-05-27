STAT.Model = Backbone.Model.extend({
  
});



STAT.Collection = Backbone.Collection.extend({
  model: STAT.Model,
  comparator: function(model){
    //console.log( new Date(model.get('start_at').iso8601) );
    //new XDate(model.get('start_at')['iso8601'])
    return -new Date(model.get('start_at').iso8601);
  }
});
