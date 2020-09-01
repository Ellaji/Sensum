/*function headerHideOnScroll() {
    const header = document.getElementById('header');
    const minScrollTop = 85;
    let initialScrollPosition = 0;
    let prevScrollY = 0;
    let initialized = false;

    if (header) {
        document.addEventListener('scroll', () => {
            if (!initialized && window.scrollY > minScrollTop) {
                initialScrollPosition = window.scrollY;
            }

            if (!initialScrollPosition && window.scrollY > prevScrollY) {
                header.classList.add("header--hidden");
            } else if (window.scrollY < prevScrollY) {
                if (window.scrollY < minScrollTop) {
                    return;
                }
                header.classList.remove("header--hidden");
            }

            prevScrollY = window.scrollY;
            initialScrollPosition = 0;
            initialized = true;
        });
    }
}*/

/*function setFooterOnMobileHamburger() {
    const navigation = document.querySelector(
        ".m-navigation-list-level1",
    ) as Node;
    if (navigation) {
        const footer = (document.querySelector(
            ".contact-info") as Node).cloneNode(true);

        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                const el = mutation.target as Element;

                if (el.className === 'm-navigation-list-level1 is-open' && el.contains(footer) === false) {
                    el.appendChild(footer);
                } else {
                    if (el.contains(footer)) {
                        el.removeChild(footer);
                    }
                }

            });
        });

        // Start observing the target node for configured mutations
        observer.observe(navigation, {
            attributes: true,
            attributeOldValue: true,
            attributeFilter: ["class"],
        });
    }
}*/

function toggleHamburger() {
    alert("toggle");
}