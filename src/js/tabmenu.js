
// タブ切り替え
export function tabSwitch() {
  const menuItems = document.querySelectorAll('.c-tabMenu__tab-menu li a');
  const contents = document.querySelectorAll('.c-tabMenu__content');

  menuItems.forEach(clickedItem => {
    clickedItem.addEventListener('click', e => {
        e.preventDefault();
        menuItems.forEach(item => {
            item.classList.remove('active');
        });
        clickedItem.classList.add('active');

        contents.forEach(content => {
            content.classList.remove('active');
        })
        document.getElementById(clickedItem.dataset.id).classList.add('active');
    });
  });

}

