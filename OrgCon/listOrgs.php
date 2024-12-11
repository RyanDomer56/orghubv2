<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="listOrgs.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
  />
  <link href="https://db.onlinewebfonts.com/c/83e4a6b639612cd501853be5a7cf97ab?family=Trend+Sans+One+Regular" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/proxima-nova-condensed" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/dm-sans" rel="stylesheet">
</head>
<body>

  
    <nav class="navbar">
        <div class="logo">
            <img src="images/longlogo.png" alt="Org Connect Logo">
        </div>

        
        <div class="nav-buttons">
          <div class="search-container">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
            <button class="btn list-orgs">
                <i class="fa-solid fa-house"></i>LIST OF ORGS</button>
            <button class="btn newsfeed">
                <i class="fa-solid fa-house"></i>NEWSFEED</button>
        </div>
        
            
        </div>
        
        <div class="nav-links">
  
            <a href="listOrgs.html"><button class="icon-btn home-icon">
                <i class="fa-solid fa-house" style="color: #ffffff;"></i>
            </button></a>
            <button class="icon-btn user-icon">
                <i class="fa-solid fa-user" style="color: #ffffff;"></i>
            </button>
            <a href="followedorgs.html"><button class="icon-btn follow-icon">
                <i class="fa-solid fa-heart" style="color: #ffffff;"></i>
            </button></a>
            <button class="icon-btn notif-icon">
                <i class="fa-solid fa-bell" style="color: #ffffff;"></i>
            </button>
            <button class="icon-btn home-icon">
                <i class="fa-solid fa-house" style="color: #ffffff;"></i>
            </button>
            <button class="icon-btn logout-icon">
                <i class="fa-solid fa-arrow-right-from-bracket" style="color: #ffffff;"></i>
            </button>
        </div>
    </nav>

  
    <div class="flex-container">

      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/orgs.png" alt="Placeholder Logo">
          </div>
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org1">
              <label for="org1">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/orgs.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org2">
              <label for="org2">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/CAS.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org3">
              <label for="org3">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/CMO.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org4">
              <label for="org4">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/EAG.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org5">
              <label for="org5">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/FBLS.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org6">
              <label for="org6">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/GES.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org7">
              <label for="org7">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/HWS.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org8">
              <label for="org8">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/SCI.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org9">
              <label for="org9">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/SVL.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org10">
              <label for="org10">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/TSG.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org11">
              <label for="org11">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/YEN.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org12">
              <label for="org12">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/orgs.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org13">
              <label for="org13">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
      <div class="card-container">
        <div class="shadow-box"></div>
        <div class="card">
          <img src="images/bglogo.png" alt="Background Image">
          <div class="logo-container">
            <img src="images/orgs.png" alt="Placeholder Logo">
          </div>
  
          <div>
            <div class="checkbox">
              <input type="checkbox" id="org14">
              <label for="org14">
                  <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                  <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
              </label>
          </div>
          </div>
  
          <div class="content">
            <div class="title">STUDENT DEVELOPMENT AND LEADERSHIP ORGANIZATION (SDLO)</div>
  
            <div class="description">
              is a group committed to fostering leadership....
            </div>
  
            <a href="aboutus.html" class="button">SEE MORE</a>
          </div>
        </div>
      </div>
  
</body>
</html>

<script>
    // Fetch followed organizations from the server
    fetch('follow.php') // Replace with the actual path to your PHP script
        .then(response => response.json())
        .then(data => {
            const orgList = document.getElementById('organization-list');
            orgList.innerHTML = ''; // Clear any existing content

            if (Array.isArray(data) && data.length > 0) {
                data.forEach(org => {
                    const orgContainer = document.createElement('div');
                    orgContainer.className = 'card-container';
                    
                    const card = document.createElement('div');
                    card.className = 'card';
                    card.innerHTML = `
                        <img src="images/bglogo.png" alt="Background Image">
                        <div class="logo-container">
                            <img src="images/orgs.png" alt="Placeholder Logo">
                        </div>
                        <div>
                            <div class="checkbox">
                                <input type="checkbox" id="${org.org_name.replace(/\s+/g, '')}" data-org-name="${org.org_name}">
                                <label for="${org.org_name.replace(/\s+/g, '')}">
                                    <i class="fa fa-heart fa-1x" aria-hidden="true" data-unchecked></i>
                                    <i class="fa fa-check-circle fa-1x" aria-hidden="true" data-checked></i>
                                </label>
                            </div>
                        </div>
                        <div class="content">
                            <div class="title">${org.org_name}</div>
                            <div class="description">${org.description}</div>
                            <a href="aboutus.html" class="button">SEE MORE</a>
                        </div>
                    `;
                    orgContainer.appendChild(card);
                    orgList.appendChild(orgContainer);

                    // Add event listener for checkbox
                    const checkbox = card.querySelector('input[type="checkbox"]');
                    checkbox.addEventListener('change', function() {
                        const orgName = this.getAttribute('org1');
                        if (this.checked) {
                            // Add to followed organizations
                            fetch('follow_org.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({ org_name: orgName })
                            })
                            .then(response => response.json())
                            .then(result => {
                                if (result.success) {
                                    alert(`${orgName} has been followed!`);
                                } else {
                                    alert(`Error following ${orgName}: ${result.message}`);
                                }
                            })
                            .catch(error => console.error('Error:', error));
                        }
                    });
                });
            } else {
                orgList.innerHTML = '<p>No followed organizations found.</p>';
            }
        })
        .catch(error => {
            console.error('Error fetching organizations:', error);
        });
</script>