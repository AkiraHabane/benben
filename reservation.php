<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Ben & Ben Hub</title>
  <style type="text/css">
    body, html {
      background-image: url(images/Ben&Ben-Interior.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      height: 100vh;
    }
  </style>
</head>
<body>

  <div class="container-xl">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card my-5">
          <div class="card-header">
            <p class="card-title display-5 fw-bold text-center">Reservation Form</p>
          </div>
          <div class="card-body px-5">
            <div class="table">
              <form action="db-reservation.php" method="post">
                <tr>
                  <div class="row justify-content-center">

                    <td>
                    <div class="col-md-6">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name" class="container-fluid mb-2" required>
                    </div>
                    </td>

                    <td>
                    <div class="col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="container-fluid mb-2" required>
                    </div>
                    </td>

                    <td>
                    <div class="col-md-4">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" placeholder="0" min="18" max="60" class="container-fluid mb-2" required>
                    </div>
                    </td>

                    <td>
                    <div class="col-md-8">
                    <label for="contactNum">Contact Number</label>
                    <input type="tel" name="contactNum" id="contactNum" placeholder="09---------" max="11" class="container-fluid mb-2" required>
                    </div>
                    </td>

                    <td>
                    <div class="col-12">
                    <label for="emailAdd">Email Address</label>
                    <input type="email" name="emailAdd" id="emailAdd" placeholder="name@example.com" class="container-fluid mb-2" required>
                    </div>
                    </td>

                    <td>
                    <div class="col-12">
                    <label for="homeAdd">Home Address</label>
                    <input type="text" name="homeAdd" id="homeAdd" placeholder="House No./Street/Municipality" class="container-fluid mb-2" required>
                    </div>
                    </td>

                    <td>
                    <div class="col-12">
                    <label for="foodAllergies">Do you have any food allergies?</label>
                    <input type="text" name="foodAllergies" id="foodAllergies" placeholder="specify here/ignore if none." class="container-fluid mb-2">
                    </div>
                    </td>

                    <td>
                    <div class="col-md-6">
                    <label for="reserveDate">Select reservation date</label>
                    <input type="date" name="reserveDate" id="reserveDate" class="container-fluid mb-2" required>
                      <script language="javascript">
                        var date = new Date();
                        var year = date.getUTCFullYear();
                        var month = date.getMonth() + 1;
                        if (month < 10) {
                          month = '0' + month;
                        }
                        var day = date.getDate() + 1;
                        if (day < 10) {
                          day = '0' + day;
                        }
                        var restrictedDate = year + "-" + month + "-" + day;
                        document.getElementById("reserveDate").setAttribute('min', restrictedDate);
                        console.log(restrictedDate);
                      </script>
                    </div>
                    </td>

                    <td>
                    <div class="col-md-6">
                    <label for="reserveTime">Select reservation time</label>
                    <select name="reserveTime" id="reserveTime" class="container-fluid mb-2">
                      <option value="8:00 AM">8:00 AM</option>
                      <option value="8:30 AM">8:30 AM</option>
                      <option value="9:00 AM">9:00 AM</option>
                      <option value="9:30 AM">9:30 AM</option>
                      <option value="10:00 AM">10:00 AM</option>
                      <option value="10:30 AM">10:30 AM</option>
                      <option value="11:00 AM">11:00 AM</option>
                      <option value="11:30 AM">11:30 AM</option>
                      <option value="12:00 PM">12:00 PM</option>
                      <option value="12:30 PM">12:30 PM</option>
                      <option value="1:00 PM">1:00 PM</option>
                      <option value="1:30 PM">1:30 PM</option>
                      <option value="2:00 PM">2:00 PM</option>
                      <option value="2:30 PM">2:30 PM</option>
                      <option value="3:00 PM">3:00 PM</option>
                      <option value="3:30 PM">3:30 PM</option>
                      <option value="4:00 PM">4:00 PM</option>
                      <option value="4:30 PM">4:30 PM</option>
                      <option value="5:00 PM">5:00 PM</option>
                      <option value="5:30 PM">5:30 PM</option>
                      <option value="6:00 PM">6:00 PM</option>
                      <option value="6:30 PM">6:30 PM</option>
                      <option value="7:00 PM">7:00 PM</option>
                      <option value="7:30 PM">7:30 PM</option>
                      <option value="8:00 PM">8:00 PM</option>
                    </select>
                    </div>
                    </td>

                    <td>
                    <div class="col-md-7">
                    <label for="reserveType">Select reservation type</label>
                    <select name="reserveType" id="reserveType" class="container-fluid mb-2">
                      <option value="Regular">Regular</option>
                      <option value="Private">Private</option>
                      <option value="Meeting">Meeting</option>
                      <option value="Celebration">Event</option>
                    </select>
                    </div>
                    </td>

                    <td>
                    <div class="col-md-5">
                    <label for="numGuests">Number of Guests</label>
                    <input type="number" name="numGuests" id="numGuests" placeholder="0" min="1" max="30" class="container-fluid mb-2" required>
                    </div>
                    </td>

                    <td>
                    <div class="text-center">
                    <input type="checkbox" id="checkbox" required>
                    <label for="checkbox">I accept the <span class="text-primary" role="button" data-bs-target="#termsNconditions" data-bs-toggle="modal">terms and conditions</span>.</label>
                    </div>
                    </td>

                    <td>
                      <div class="text-center">
                    <input type="submit" name="submit" class="btn btn-outline-primary mt-4 px-4">
                      </div>
                    </td>

                  </div>
                </tr>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="termsNconditions">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title fw-bold">Ben & Ben Hub Terms and Conditions</div>
          </div>
          <div class="modal-body">
          <p class="text-start" style="white-space: pre-wrap;">Below are our detailed, but not limited, terms and conditions, which also include our privacy policy. Please read these before making a reservation. If you have any further questions or requests, please don't hesitate to contact us. In addition, when making a reservation, an email address is required because that will be used for our confirmation email.

<span class="fw-bold">Terms and Conditions:</span>

<span class="fw-bold">1. Table Allocations</span>
Due to the large number of requests, we unfortunately cannot guarantee specific areas for all reservation types when taking reservations. Areas will be allocated solely based on availability and will only be shown upon your arrival at the venue.

<span class="fw-bold">2. Customer Arrivals</span>
To provide the highest level of service for all of our customers, we kindly ask that you arrive prepared to be seated at the time of your reservation. After being detained for ten minutes, the area might be given to another customer.

<span class="fw-bold">3. Table Durations</span>
Reserved slots are only accessible for a maximum of two hours before being re-booked for another customer. Kindly contact us if you plan to stay at your area for more than two hours. There will be a PHP 10.00 fee for each additional minute. We apologize for having to impose extension fees.

<span class="fw-bold">4. Rebooking</span>
For slots reserved at 8 p.m. or later, your area will not be re-booked, but please let us know if you’d like to stay for longer than two hours.

<span class="fw-bold">5. Notification</span>
We will notify you by email or text message a day before your reservation about your pending reservation at our restaurant. Also, if we have to make a significant change or cancel or reschedule your reservation, we will inform you as soon as possible.

<span class="fw-bold">6. Outsider Foods</span>
Outside food and beverages are not allowed inside our restaurant, but we do permit food from our restaurants to be taken out.

<span class="fw-bold">7. Number of Guests</span>
The number of guests who attend your reservation that exceeds the number of guests you select into our reservation form will be charged PHP 100 per head. Likewise, any damage to the property of our restaurant caused by customers will be charged accordingly as well.

<span class="fw-bold">8. Cancelation Policy</span>
There is strictly no cancellation of reservations. However, if absolutely needed, please contact us 5 hours or more before the time of reservation; this is for us to allocate your slots to other customers.

<span class="fw-bold">9. Customer Personal Information</span>
Your first and last name, age, contact number, email address, home address, and allergies are among the personally identifiable data we will gather. Ben & Ben Hub will use your data in a private manner and will only use it for appropriate business purposes.

<span class="fw-bold">10. Personal Information Security</span>
 We will only keep your personal information for as long as it takes to complete the tasks for which it was originally obtained. After our transactions, we will quickly remove it. Additionally, we'll implement technical security measures to prevent the loss, unauthorized use, or alteration of your personal data.

<span class="fw-bold">11. Third Party Websites</span>
The privacy policies or procedures of websites operated by third parties are not subject to our control. As a result, you should make sure to read the relevant privacy policies before visiting such sites since we have no control over the data that is sent to or collected by these third parties.

<span class="fw-bold">12. Covid-19</span>
Guests certify that they agree to follow any applicable government regulations that may be in force at the time of their reservation by booking a reservation. Additionally, visitors affirm that they do not exhibit COVID-19 symptoms.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>