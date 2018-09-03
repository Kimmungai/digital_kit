function toggle(id,title)
{
  $('#'+id).slideToggle('slow');
  $('#'+title+' i').toggleClass('fa-chevron-circle-up fa-chevron-circle-down');
}
