
// タブ切り替え
export function tabSwitchDiet02() {
  const menuItems = document.querySelectorAll('.c-tabMenu__tab-menu02 li a');
  const contents = document.querySelectorAll('.c-tabMenu__content02');

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

// タブ切り替え
export function tabSwitchDiet03() {
  const menuItems = document.querySelectorAll('.c-tabMenu__tab-menu03 li a');
  const contents = document.querySelectorAll('.c-tabMenu__content03');

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

