async function readPost() {
  let postsArea = document.querySelector(".posts");
  postsArea.innerHTML = "Carregando...";
  let response = await fetch("https://jsonplaceholder.typicode.com/posts");
  let json = await response.json();

  if (json.length > 0) {
    postsArea.innerHTML = "";

    for (let i in json) {
      let postHtml = `<div><h1>${json[i].title}</h1>${json[i].body}<hr/></div>`;
      postsArea.innerHTML += postHtml;
    }
  } else {
    postsArea.innerHTML = "Sem Posts";
  }
}

async function addNewPost(title, body) {
  await fetch("https://jsonplaceholder.typicode.com/posts", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      title: title,
      body: body,
      userId: 2,
    }),
  });
  document.querySelector("#titleField").value = "";
  document.querySelector("#bodyField").value = "";
  readPost()
}
document.querySelector("#insertButton").addEventListener("click", () => {
  let title = document.querySelector("#titleField").value;
  let body = document.querySelector("#bodyField").value;

  if (title && body) {
    addNewPost(title, body);
  } else {
    alert("Preencha todos os campos");
  }
});

readPost();
