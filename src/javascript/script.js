function openDispaly(loadData) {
    const popup = document.getElementById(loadData.id);
    popup.classList = loadData.class;
    popup.style.display = "flex"; 

    function handler(e) {
        if (!popup.contains(e.target)) {
            popup.style.display = "none";
            document.removeEventListener("click", handler);
        }
    }

   
    setTimeout(() => {
       
        document.addEventListener("click", handler);
    }, 0);
}
