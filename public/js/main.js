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
  