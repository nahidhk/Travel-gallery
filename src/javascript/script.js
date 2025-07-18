function openDispaly(loadData) {
    const popup = document.getElementById(loadData.id);
    popup.classList = loadData.class;
    popup.style.display = "flex"; // show popup explicitly

    // Popup এর বাইরে ক্লিক করলে hide হবে
    function handler(e) {
        if (!popup.contains(e.target)) {
            popup.style.display = "none";
            document.removeEventListener("click", handler);
        }
    }

    // ইভেন্ট লিসেনার যোগ করো
    setTimeout(() => {
        // একটু delay দিয়ে যোগ করো, না হলে ওপেন বাটনের ক্লিক ইভেন্টও trigger হতে পারে
        document.addEventListener("click", handler);
    }, 0);
}
