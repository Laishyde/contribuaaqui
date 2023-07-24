const rankContainer = document.getElementById('rank');
let likeCount = 0;
const maxLikes = 10;
const userImageUrls = [
  './assets/guri.jpg',
  './assets/homem.jpg',
  './assets/lais.jpg',
  './assets/gato.jpg',
  './assets/menina.jpg',
  // Adicione mais URLs de imagens de perfil aqui
];
let rankData = [];

function giveLike() {
  if (likeCount < maxLikes) {
    likeCount++;
    const userImageUrl = userImageUrls[Math.floor(Math.random() * userImageUrls.length)];
    const newUser = {
      id: likeCount,
      imageUrl: userImageUrl
    };
    rankData.unshift(newUser);
    updateRank();
  }
}

function updateRank() {
  rankContainer.innerHTML = '';
  rankData.forEach(user => {
    const newLike = document.createElement('div');
    newLike.classList.add('rank-item');
    newLike.innerHTML = `
      <img src="${user.imageUrl}" alt="Usuário ${user.id}">
      <span>Usuário ${user.id}</span>
    `;
    rankContainer.appendChild(newLike);
  });
}




