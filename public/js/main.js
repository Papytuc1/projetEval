/* function makeRequest(terms) {
    return $.ajax({
      url: `https://www.googleapis.com/books/v1/volumes?q=${terms}`,
      method: 'GET',
      data: {
        api_key: "AIzaSyCpPJzXnHzlC0E9ZmiCSJwH3VKu505cD-M",
        langRestrict: "fr",
        orderBy: "newest"
      },
    })
  };

  $.when(makeRequest("project=full")).done(function(project){
    console.log(project.items)
  }) */

 $(".booking").click(function () {
  $.post(
    '../controler/ajax.php', {
      id: $(this).data("id"),
      uc: 'livre'
    },
    function (data){
      console.log(data)
      result=JSON.parse(data)
      console.log(result);
      if(result.reservation>0){
      alert("votre livre est reservé");
      }else{
        alert("votre livre ne doit plus être en stock");
      }
    }
  )
}); 