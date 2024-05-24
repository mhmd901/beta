function show_edit_user(id, fname, lname, city, dob,phone,gender, Password) {
    let box = document.getElementById("box");
    let form = `<div class="edit_user">
        <form method="post" action="admin_edit_profile.php?action=saveuser">
          <p>${id}</p>
          <input type="hidden" name="id" value="${id}" />
          <label>first name</label>
          <input
            type="text"
            name="fname"
            placeholder="First name"
            value="${fname}"
            required
          />
          <label>last name</label>
          <input
            type="text"
            name="lname"
            placeholder="Last name"
            value="${lname}"
            required
          />
          <!--select-->
          
  
          <label>city</label>
          <input
            type="text"
            name="city"
            placeholder="city"
            value="${city}"
            required
          />
          <label>date of birth</label>
          <input
            type="text"
            name="dob"
            placeholder="date of birth"
            value="${dob}"
            required
          />
          <label>phone</label>
          <input
            type="text"
            name="phone"
            placeholder="phone"
            value="${phone}"
            required
          />
          <label>phone</lable>          
          <input
            type="text"
            name="gender"
            placeholder="gender"
            value="${gender}"
            required
          />
          <label>password</label>
          <input
            type="text"
            name="password"
            placeholder="Password"
            value="${Password}"
            required
          />
          <div class="form-group submit-btn">
          <input type="submit" value="save">
        </div>
        </form>
      </div>`;
  
    box.innerHTML = form;
  } 
  function show_users(Id,fname,lname,dob,gender,phone,city) {
  
    let output = document.getElementById("outputbox");
  
   let form = `
    <div class="users_info">
       <table>
        <tr>
          <th>ID</th>
          <th>first name</th>
          <th>last name</th>
          <th>date of birth </th>
          <th>gender</th>
          <th>phone</th>
          <th>city</th>
        </tr>
      
     
    `;
  
    for (let i = 0; i < Id.length; i++) {
      form += `
        <tr>
          <td>${Id[i]}</td>
          <td>${fname[i]}</td>
          <td>${lname[i]}</td>
          <td>${dob[i]}</td>
          <td>${gender[i]}</td>
          <td>${phone[i]}</td>
          <td>${city[i]}</td>
        </tr> 
      
      `;
    }
  
    form += ` </table>
  
         
        </div>`;
  
    output.innerHTML = form;
  }     