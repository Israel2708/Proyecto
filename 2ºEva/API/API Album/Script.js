const urlApi = "https://jsonplaceholder.typicode.com/";
const mainSection = document.getElementById("posts");
//Realizamos la llamada a la API
fetch(urlApi+"/albums") //Esto hace la llamada a la URL
.then(function(response)
{
    return response.json();//Cuando responde formateo la respuesta como JSON
})
.then(function(json) //En este bloque hago lo que quiero con el JSON
{
for(let i=0; i < json.length; i++){

    let articlePost = document.createElement("article");
    let articleTitulo = document.createElement("p");
    let articleID = document.createElement("h2");
    articleID.innerHTML = json[i].id;
    articleTitulo.innerHTML = json[i].title;
    articlePost.appendChild(articleID);
    articlePost.appendChild(articleTitulo);
    mainSection.appendChild(articlePost);
}
});