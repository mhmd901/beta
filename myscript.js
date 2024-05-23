function show_edit_user(id, fname, lname, city, dob,phone,gender, Password) {
    let box = document.getElementById("box");
    let form = `<div class="edit_user">
        <form method="post" action="admin_edit_profile.php?action=saveuser">
          <p>${id}</p>
          <input type="hidden" name="id" value="${id}" />
          <input
            type="text"
            name="fname"
            placeholder="First name"
            value="${fname}"
            required
          />
          <input
            type="text"
            name="lname"
            placeholder="Last name"
            value="${lname}"
            required
          />
          <!--select-->
          
  
  
    <input
            type="text"
            name="city"
            placeholder="city"
            value="${city}"
            required
          />
          <input
            type="text"
            name="dob"
            placeholder="date of birth"
            value="${dob}"
            required
          />
          <input
            type="text"
            name="phone"
            placeholder="phone"
            value="${phone}"
            required
          />
          <input
            type="text"
            name="gender"
            placeholder="gender"
            value="${gender}"
            required
          />
          <input
            type="text"
            name="password"
            placeholder="Password"
            value="${Password}"
            required
          />
          <button type="submit">save</button>
        </form>
      </div>`;
  
    box.innerHTML = form;
  } 
  function show_users(Id) {
  
    let output = document.getElementById("outputbox");
  
   let form = `
    <div class="users_info">
       <table>
        <tr>
          <th>ID</th>
        </tr>
      
     
    `;
  
    for (let i = 0; i < Id.length; i++) {
      form += `
        <tr>
          <td>${Id[i]}</td>
        </tr>
      
      `;
    }
  
    form += ` </table>
  
         
        </div>`;
  
    output.innerHTML = form;
  }