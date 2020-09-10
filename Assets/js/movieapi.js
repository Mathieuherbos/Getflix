
       fetch('https://api.themoviedb.org/3/movie/top_rated?api_key=1e66bb54842fd3f30701abb2ada1a126&language=en-US&page=1')
       .then(function(response) {
        return response.json();
        })
        
        .then(function(json) {
            console.table(json.results);
            
            let movies = json.results;

            for (let i = 0, len = movies.length; i < len; i++) {
               
                console.log(movies[i].title);     
                console.log(movies[i].overview);     
                console.log(movies[i].release_date);   
                
                var output = document.getElementById("output");
                
                    // Transforme la réponse 
                        // Ajout du titre et du contenu 
                        var titreElt = document.createElement("h3");
                        titreElt.textContent = movies[i].title;
                        var rateElt = document.createElement("h6");
                        rateElt.textContent = movies[i].vote_average + " /10";
                        var contenuElt = document.createElement("p");
                        contenuElt.textContent = movies[i].overview;
                        var imgElt = document.createElement("img");
                        imgElt.src = "https://image.tmdb.org/t/p/w185/" + movies[i].poster_path;
                        output.appendChild(titreElt);
                        output.appendChild(rateElt);
                        output.appendChild(contenuElt);
                        output.appendChild(imgElt);
            }
                
                    });

                
                
              
            
              
             
       

        
        