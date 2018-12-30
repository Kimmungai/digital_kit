function add_to_cart(track){
  event.preventDefault();
  var song = $("#track-"+track).data("song");
  var price = $("#track-"+track).data("price");

  if(!$('#cart-song-'+track+'').length){
    $("#music-shopping-cart-list > tbody").append('<tr id="cart-song-'+track+'"><th scope="col">'+song+'</th><td scope="col" class="music-cart-song-price">'+price+'</td><td onclick="remove_from_cart('+track+')" scope="col"><span class="badge badge-pill badge-danger remove-from-cart">X</span></td></tr>');
    //<input type="hidden" name="cart-song-'+track+'" value="'+track+'">
    $('<input>').attr({
      type: 'hidden',
      //id: 'foo',
      name: 'cart-song-'+track+'',
      value:track
    }).appendTo('#music-shopping-cart-form');

    itemsInCart();
    cartTotal();
    //alert('added'); Add icon to show added to cart
  }
  else{
    alert("Item already in cart!")
  }

}
function remove_from_cart(id){

  //remove music from cart
  //check if exists
  if($('#cart-song-'+id+'').length){

    $("#cart-song-"+id).remove();
    cartTotal();
    itemsInCart();
  }
  else{
    alert("Item not in cart!");
  }

}
function addCss(element,property,value){
  $(element).css(property,value);
}
function itemsInCart(){
  var itemsInCart = $('#music-shopping-cart-list >tbody >tr').length;
  if(itemsInCart > 0){
    $("#items-in-cart").text(itemsInCart);
  }
  else{
    $("#items-in-cart").text('');
    $("#music-cart-total").text('$0.00');
  }
}
function cartTotal(){
  var sum=0;
  $('.music-cart-song-price').each(function(){

    var songPrice=$(this).text();

    if(!isNaN(songPrice)){
      sum += parseFloat(songPrice);
    }
    $("#music-cart-total").text('$'+sum.toFixed(2));
    $("#music-cart-total-input").val(sum.toFixed(2));
  });
}
