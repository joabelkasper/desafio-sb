var Desafio = Desafio || {};

Desafio = {

  novoTweet: function() {

    if(Desafio.validaTweet()){

      var tweet = document.getElementById('tweet').value;

      var dados = "tweet="+tweet;
      jQuery.ajax({
        type: "POST",
        url: "api/tweet",
        data: dados,
        success: function(msg){
          console.log(msg);
          swal("Tweet cadastrado com sucesso.", "", "success")
        }
      });
    }

  },

  validaTweet: function(){

    var tweet = document.getElementById('tweet').value;

    if(tweet == "" || (tweet.length < 5 || tweet.length > 140)){
      swal("Preencha o campo corretamente.", "Minímo 5 caracteres e máximo de 140", "error");
      return false;
    }else{
      return true;
    }
    

  }

}

