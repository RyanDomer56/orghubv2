// Combine the search functionality into one listener
searchInput.addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    let hasResults = false;

    cards.forEach(card => {
        const title = card.querySelector('.title').textContent.toLowerCase();
        const description = card.querySelector('.description').textContent.toLowerCase();

        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            card.style.display = 'block';
            hasResults = true;
        } else {
            card.style.display = 'none';
        }
    });

    // Show/hide no results message
    let noResultsMsg = document.querySelector('.no-results-message');
    if (!hasResults && searchTerm !== '') {
        if (!noResultsMsg) {
            noResultsMsg = document.createElement('div');
            noResultsMsg.className = 'no-results-message';
            noResultsMsg.style.textAlign = 'center';
            noResultsMsg.style.marginTop = '20px';
            noResultsMsg.style.color = '#666';
            document.querySelector('.flex-container').appendChild(noResultsMsg);
        }
        noResultsMsg.textContent = 'No organizations found matching your search.';
        noResultsMsg.style.display = 'block';
    } else if (noResultsMsg) {
        noResultsMsg.style.display = 'none';
    }
});

// Improve the follow/unfollow functionality with error handling
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.checkbox input[type="checkbox"]');
    
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const orgName = this.getAttribute('data-org-name');
            const isFollowing = this.checked;

            fetch('follow.php', {
                method: isFollowing ? 'POST' : 'DELETE',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `org_name=${encodeURIComponent(orgName)}`
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
                // Revert checkbox state on error
                this.checked = !isFollowing;
                // Optionally show error message to user
                alert('Failed to update following status. Please try again.');
            });
        });
    });
});
