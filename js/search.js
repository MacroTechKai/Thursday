document.addEventListener("DOMContentLoaded", function () {
    const searchButton = document.getElementById("searchButton");
    const searchInput = document.getElementById("searchInput");
    const resultsDiv = document.getElementById("results");
    const filterCategoryButtons = document.querySelectorAll(".filter-category");
    const filterSubOptionsDiv = document.getElementById("filter-sub-options");

    // 搜索事件
    searchButton.addEventListener("click", () => {
        const query = searchInput.value.trim();
        if (!query) {
            resultsDiv.innerHTML = "<p>Please enter a search term.</p>";
            return;
        }

        fetch(`../php/search.php?q=${encodeURIComponent(query)}`)
            .then((response) => response.text())
            .then((data) => {
                resultsDiv.innerHTML = data;
            })
            .catch((error) => {
                console.error("Error fetching search results: ", error);
                resultsDiv.innerHTML = "<p>Error fetching search results. Please try again later.</p>";
            });
    });

    // 动态加载过滤选项
    document.getElementById("filter-options").addEventListener("click", (e) => {
        if (e.target.classList.contains("filter-category")) {
            const type = e.target.dataset.type;
            filterSubOptionsDiv.innerHTML = ""; // 清空子选项

            const options = type === "Cuisine" ? ["East", "West"] : ["Veggie", "Meat"];

            options.forEach(option => {
                const button = document.createElement("button");
                button.className = "filter-option";
                button.textContent = option;
                button.dataset.type = type;
                button.dataset.value = option;

                button.addEventListener("click", () => {
                    fetch(`../php/filter.php?${type}=${encodeURIComponent(option)}`)
                        .then((response) => response.text())
                        .then((data) => {
                            resultsDiv.innerHTML = data;
                        })
                        .catch((error) => {
                            console.error("Error fetching filter results: ", error);
                            resultsDiv.innerHTML = `<p>Error fetching results for ${type}: ${option}.</p>`;
                        });
                });

                filterSubOptionsDiv.appendChild(button);
            });
        }
    });
});
