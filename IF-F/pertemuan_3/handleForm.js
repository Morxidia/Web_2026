const myForm = document.getElementById("formData");
const myName = document.getElementsByName("nama");

const myHobby = document.getElementsByName("hobby");
const myGender = document.getElementsByName("gender");

myForm.onsubmit = (event) => {
  event.preventDefault();
  console.log("Nama saya: " + myName[0].value);

  myHobby.forEach((hobby) => {
    if (hobby.checked) {
      console.log("Hobi saya: " + hobby.value);
    }
  });

  myGender.forEach((gender) => {
    if (gender.checked) {
      console.log("Gender saya: " + gender.value);
    }
  });
};
