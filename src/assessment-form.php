<?php
/*****
 * PHPFormMaker
 *
 * @category PHP_Form
 * @package  PHPFormMaker
 * @author   Vanstone Online <jason@vanstoneonline.com>
 * @license  G.P.L Version 3.0 or higher
 * @link     https://jobcanada.org/immigration-assessment.php
 */

$formArray = [
    'first_name',
    'last_name',
    'email',
    'telephone_number',
    'country_of_birth',
    'date_of_dirth',

];
    

//require './src/create-array.php';

?>


    <!-- General Information -->
 <fieldset>
   <legend>General Information</legend>

 <label class="item required" id="label_First_Name" for="First_Name">First Name</label>
  <input type="text" data-toggle="tooltip" title="requird field" id="First_Name" name="First_Name" value="<?php //echo $First_Name;?>" required />

  <label class="item required" id="label_Last_Name" for="Last_Name">Last Name</label>
  <input type="text" data-toggle="tooltip" title="requird field"id="Last_Name" name="Last_Name" value="<?php //echo $Last_Name; ?>" required />

  <label class="item required" id="label_Email" for="Email">Email</label>
  <input type="Email" id="Email" pattern=".{6,}" maxLength="100" name="Email" value="<?php //echo $Email; ?>" required />

  <label class="item required" id="label_Telephone" for="Telephone">Telephone Number</label>
  <input type="tel"  id="Telephone" name="Telephone" value="<?php //echo $Telephone; ?>" required />

  <label class="item required" id="label_Birth_Country" for="Birth_Country">Country of Birth</label>
  <input type="text" data-toggle="tooltip" title="requird field" id="Birth_Country" name="Birth_Country" value="<?php //echo $Birth_Country; ?>" />

  <label class="item required" id="label_Birthdate" for="dateBox">Date of Birth</label>
  <input type="date" data-toggle="tooltip" title="requird field" id="Birthdate" />

  <label class="item required" id="label_Why?" for="Why_Do_You_want_to_come_to_Canada">Why do you want to come to Canada</label>

  <label class="item"> 
    <input class="radio" type="radio" name="Why_Do_You_want_to_come_to_Canada" value="Skilled_Worker" checked="checked"/>
    Skilled Worker
  </label>
    
  <label class="item">
    <input type="radio" name="Why_Do_You_want_to_come_to_Canada" value="Business_Entrepreneur" />
    Business / Entrepreneur      
  </label>


  <label class="item">
    <input type="radio" name="Why_Do_You_want_to_come_to_Canada" value="Family_sponsorship " />
    Family Sponsorship
  </label>

  <label class="item">
    <input type="radio" name="Why_Do_You_want_to_come_to_Canada" value="Study" />
    Study
  </label>

  <label class="item">
  <input type="radio" name="Why_Do_You_want_to_come_to_Canada" value="Visit" />
  Visit
  </label>
  

 </fieldset>

   <!-- Current address

 <fieldset>
 <legend>Current Address</legend>

  <label class="item required" id="label_Street_Address" for="Street_Address">Street</label>
  <input type="text" data-toggle="tooltip" title="requird field"  id="Street_Address" name="Street_Address" required />

  <label class="item required" id="City_Address" for="City_Address">City</label>
  <input type="text" data-toggle="tooltip" title="requird field"  id="City_Address" name="City_Address" required />

  <label class="item required" id="label_Province" for="Province">State/Province</label>
  <input type="text" data-toggle="tooltip" title="requird field"  id="Province" name="Province" required />

  <label class="item required" id="label_Country_Address" for="Country_Address">Country</label>
  <input type="text" data-toggle="tooltip" title="requird field"  id="Country_Address" name="Country_Address" required />

  <label class="item required" id="label_Postal_Code" for="Postal_Code">Postal Code</label>
  <input type="text" data-toggle="tooltip" title="requird field"  id="Postal_Code"name="Postal_Code" required />

 </fieldset>-->


 <!-- Marital Status
 <fieldset>
 <legend>Marital Status</legend>

 <label class="item radioLabel"> What is your current Marital Status?</label>
   <div class="answerbox">
     <div class="radio_container">
      <label class="item">Married
         <input class="radio" type="radio" name="Marital_Status" value="Married" checked="checked"/>
         <span class="checkmark"></span>
       </label>
      </div>

     <div class="radio_container">
       <label class="item">Widow/Widower
         <input type="radio" name="Marital_Status" value="Widow/Widower" />
         <span class="checkmark"></span>
       </label>
     </div>

     <div class="radio_container">
       <label class="item">Single
         <input type="radio" name="Marital_Status" value="Single" />
         <span class="checkmark"></span>
       </label>
     </div>

     <div class="radio_container">
       <label class="item">Engaged
         <input type="radio" name="Marital_Status" value="Engaged" />
         <span class="checkmark"></span>
       </label>
     </div>

     <div class="radio_container">
       <label class="item">Common-Law
         <input type="radio" name="Marital_Status" value="Common-Law" />
         <span class="checkmark"></span>
       </label>
    </div>

    <div class="radio_container">
      <label class="item">Divorce/Separated
        <input type="radio" name="Marital_Status" value="Divorce/Separated" />
        <span class="checkmark"></span>
      </label>
      </div>
  </div>

    <label class="item radioLabel" id="Marriage_Date" for="Marriage_Date">If you are married, date married</label>
    <input class="date" type="date" data-toggle="tooltip" title="requird field"  id="Marriage_Date" name="Marriage_Date"/>

    <label class="item radioLabel" id="Common_Law" for="Common_Law">If you live with your spouse, but are not married, what is the day you started living together</label>
    <input class="date" type="date" data-toggle="tooltip"  id="Common_Law" name ="Common_Law" />


  <label class="item radioLabel">If you are married or common-law, will your spouse immigrate to Canada with you?</label>
   <div class="answerbox">
  <div class="radio_container">
  <label class="item">Yes
  <input type="radio" name="Partner_Imigrate_too" value="Yes" />
  <span class="checkmark"></span></label>
  </div>

 <div class="radio_container">
  <label class="item">No
  <input type="radio"name="Partner_Imigrate_too" value="No" />
  <span class="checkmark"></span></label>
 </div>
    </div>
  <label class="item radioLabel" id="Have_Children" for="Have_Children">Do you have children?</label>
     <div class="answerbox">
  <div class="radio_container">
  <label class="item">Yes
   <input type="radio" name="Have_Children" value="Yes" />
  <span class="checkmark"></span></label>
  </div>

 <div class="radio_container">
  <label class="item">No
  <input type="radio" name="Have_Children" value="No" />
  <span class="checkmark"></span></label>
 </div>
    </div>
 <label class="item radioLabel" id="label_How_many_Children">How many children do you have? What are their ages?</label>
  <input type="text" rows="5" id="How_many_Children" name="How_many_Children"></textarea>

  </fieldset>
-->
   <!-- TRAVEL TO CANADA

   <fieldset>

   <legend>TRAVEL TO CANADA</legend>

  <label class="item radioLabel" id="Work_Study_Travel" for="Work_Study_Travel">Have you worked in, studied in, or visited Canada?</label>
 <div class="answerbox">
  <div class="radio_container">
  <label class="item">Yes

  <input type="radio" name="Work_Study_Travel" value="Yes" />
  <span class="checkmark"></span></label>
  </div>

  <div class="radio_container">
  <label class="item">No
  <input type="radio" name="Work_Study_Travel" value="No" />
  <span class="checkmark"></span></label>
  </div>
 </div>

  <label class="item radioLabel" id="Study_Permit" for="Study_Permit">Have you ever had a work or study permit to Canada?</label>
    <div class="answerbox">
  <div class="radio_container">
  <label class="item">Yes
   <input type="radio" name="Study_Permit" value="Yes" />
  <span class="checkmark"></span></label>
  </div>

 <div class="radio_container">
  <label class="item">No
  <input type="radio" name="Study_Permit" value="No" />
  <span class="checkmark"></span></label>
 </div>
 </div>
  <label class="item radioLabel" id="label_permit_dates" for="permit_dates">If you lived in Canada before what were the dates?</label>
  <label class="item label" for="permit_dates">From:</label>
  <input class="date" type="date" data-toggle="tooltip" title="requird field" id="Permit_Dates_From" name="Permit_Dates_From" />

  <label class="item label" for="permit_dates">To:</label>
  <input class="date" type="date" data-toggle="tooltip" title="requird field" id="Permit_Dates_To" name="Permit_Dates_To"  />

 <label class="item radioLabel" id="friends_canada" for="Friends_Canada">Do you or your partner have close family members who are Permanent Residents or Citizens of Canada?</label>
   <div class="answerbox">
<div class="radio_container">
  <label class="item">Yes
   <input type="radio" name="Friends_Canada" value="Yes" />
  <span class="checkmark"></span></label>
  </div>

 <div class="radio_container">
  <label class="item">No
  <input type="radio" name="Friends_Canada" value="No" />
  <span class="checkmark"></span></label>
 </div>
 </div>
 </fieldset>

 -->
<!-- ENGLISH LANGUAGE TEST
<fieldset>
 <legend>English Language Test</legend>

    <label class="item radioLabel" id="Taken_Test" for="Taken_Test">Have you taken an IELTS or CELPIP English language
test?
</label>
   <div class="answerbox">
    <div class="radio_container">
      <label class="item">Yes
       <input type="radio" name="Taken_Test" value="Yes" />
      <span class="checkmark"></span></label>
      </div>

 <div class="radio_container">
  <label class="item">No
  <input type="radio" name="Taken_Test" value="No" />
  <span class="checkmark"></span></label>
 </div>
  </div>
  <label class="item label" for="Test_Date">Test Date:</label>
  <input class="date" type="date" data-toggle="tooltip" id="Test_Date" name="Test_Date"  />


   <div class="answerbox">
      <div class="radio_container">
      <label class="item">General
       <input type="radio" name="Taken_Test_Type" value="General" />
      <span class="checkmark"></span></label>
      </div>

 <div class="radio_container">
  <label class="item">Academic
  <input type="radio" name="Taken_Test_Type" value="Academic" />
  <span class="checkmark"></span></label>
 </div>
 </div>

  <label class="item label" id="Reading_Score" for="Reading_Score">Reading Score</label>
  <input type="text" data-toggle="tooltip" id="Reading_Score" name="Reading_Score"  />

  <label class="item label" id="label_Wrting_Score" for="Wrting_Score">Writing Score</label>
  <input type="text" data-toggle="tooltip" id="Wrting_Score" name="Wrting_Score" />

  <label class="item label" id="label_Speaking_Score" for="Speaking_Score">Speaking Score</label>
  <input type="text" data-toggle="tooltip"  id="Speaking_Score" name="Speaking_Score" />

  <label class="item label" id="label_Listening_Score" for="Listening_Score">Listening Score</label>
  <input type="text" data-toggle="tooltip"  id="Listening_Score" name="Listening_Score" />

 </fieldset>
-->
  <!-- EDUCATION

 <fieldset>
 <legend>EDUCATION</legend>

 <h3>Most Recent Education</h3>

 <label class="item required" id="label_Edu_Start_Date1" for="Edu_Start_Date1">From (YYYY-MM)</label>
 <input class="date" type="date" data-toggle="tooltip" id="Edu_Start_Date1" name="edu_rom" required />

 <label class="item required" id="label_Edu_Finish_Date1" for="Edu_Finish_Date1">To (YYYY-MM)</label>
 <input class="date" type="date" data-toggle="tooltip" id="Edu_Finish_Date1" name="Edu_Finish_Date1" required />

 <label class="item required" id="label_School1" for="School1">Name of School</label>
 <input type="text" data-toggle="tooltip"  id="School1" name="School1" required />

 <label class="item required" id="label_School_Origin1" for="School_Origin1">City and Country</label>
 <input type="text" data-toggle="tooltip"  id="School_Origin1" name="School_Origin1" required />

 <label class="item required" id="label_Degree_Awarded1" for="Degree_Awarded1">Type of Degree</label>
 <input type="text" data-toggle="tooltip"  id="Degree_Awarded1" name="Degree_Awarded1" required />

 <label class="item required" id="label_Studied1" for="Studied1">Area of Study</label>
 <input type="text" data-toggle="tooltip"  id="Studied1" name="Studied1" required />

  <h3 style="clear:both;">Other Previous Education</h3>

 <label class="item label" id="label_Edu_Start_Date2" for="Edu_Start_Date2">From (YYYY-MM)</label>
   <input class="date" type="date" data-toggle="tooltip" id="Edu_Start_Date2" name="edu_rom" />

 <label class="item label" label id="label_Edu_Finish_Date2" for="Edu_Finish_Date2">To (YYYY-MM)</label>
 <input class="date" type="date" data-toggle="tooltip" id="Edu_Finish_Date2" name="Edu_Finish_Date2"  />

 <label class="item label" id="label_School2" for="School2">Name of School</label>
 <input type="text" data-toggle="tooltip"  id="School2" name="School2"  />

 <label class="item label" id="label_School_Origin2" for="School_Origin2">City and Country</label>
 <input type="text" data-toggle="tooltip"  id="School_Origin2" name="School_Origin2" />

 <label class="item label" id="label_Degree_Awarded2" for="Degree_Awarded2">Type of Degree</label>
 <input type="text" data-toggle="tooltip"  id="Degree_Awarded2" name="Degree_Awarded2"  />

 <label class="item label" id="label_Studied2" for="Studied2">Area of Study</label>
 <input type="text" data-toggle="tooltip"  id="Studied2" name="Studied2"  />

 </fieldset>
 -->
  <!-- EMPLOYMENT HISTORY MOST RECENT
 <fieldset>

   <legend>EMPLOYMENT HISTORY</legend>

    <h3>Most Recent Employment</h3>

      <label class="item required" id="label_Job_From1" for="Job_From1">From (YYYY-MM)</label>
   <input class="date" type="date" data-toggle="tooltip"  id="Job_From1" name="Job_From1" required />

      <label class="item label" id="label_emp_to" for="Job_To1">To (YYYY-MM)</label>
    <input class="date" type="date" data-toggle="tooltip"  id="Job_To1" name="Job_To1" />

      <label class="item required" id="label_Job_Title1" for="Job_Title1">Job Title</label>
    <input type="text" data-toggle="tooltip"  id="Job_Title1" required />

      <label class="item required" id="label_job-place" for="Job_Place1">City/Town and Country</label>
    <input type="text" data-toggle="tooltip"  id="Job_Place1" name="Job_Place1" required />

      <label class="item required" id="label_Employer_Name1" for="Employer_Name1">Name of Employer</label>
     <input type="text" data-toggle="tooltip"  id="Employer_Name1" required />

      <label class="item radioLabel" id="label_canadian_work" for="Canadian_Work1">Was it work in Canada</label>
    <div class="answerbox">
    <div class="radio_container">
     <label class="item">Yes
       <input type="radio" name="Canadian_Work1" value="Yes" />
      <span class="checkmark"></span></label>
      </div>

     <div class="radio_container">
      <label class="item">No
     <input type="radio" name="Canadian_Work1" value="No" />
      <span class="checkmark"></span></label>
     </div>
     </div>

     <h3>Other Previous Employment</h3>

      <label class="item label" id="label_Job_From2" for="Job_From2">From (YYYY-MM)</label>
 <input class="date" type="date" data-toggle="tooltip"  id="Job_From2" name="Job_From2"  />

      <label class="item label" id="label_emp_to" for="Job_To2">To (YYYY-MM)</label>
    <input class="date" type="date" data-toggle="tooltip"  id="Job_To2" name="Job_To2" />

      <label class="item label" id="label_Job_Title2" for="Job_Title2">Job Title</label>
    <input type="text" data-toggle="tooltip"  id="Job_Title2" />

      <label class="item label" id="label_job-place" for="Job_Place2">City and Country</label>
    <input type="text" data-toggle="tooltip"  id="Job_Place2" name="Job_Place2" />

      <label class="item label" id="label_Employer_Name2" for="Employer_Name2">Name of Employer</label>
     <input type="text" data-toggle="tooltip"  id="Employer_Name2" />

      <label class="item radioLabel" id="label_canadian_work" for="Canadian_Work2">Was it work in Canada</label>
    <div class="answerbox">
    <div class="radio_container">
     <label class="item">Yes
       <input type="radio" name="Canadian_Work2" value="Yes" />
      <span class="checkmark"></span></label>
      </div>

     <div class="radio_container">
      <label class="item">No
     <input type="radio" name="Canadian_Work2" value="No" />
      <span class="checkmark"></span></label>
     </div>
   </div>
 </fieldset> -->


 <!-- TRAVEL FOR THE LAST 10 YEARS (DO NOT INCLUDE TRIPS IN OR TO YOUR COUNTRY OF ORIGIN)


 <fieldset>
    <legend>TRAVEL FOR THE LAST 10 YEARS</legend>
    <p class="small"><i>DO NOT INCLUDE TRIPS IN OR TO YOUR COUNTRY OF ORIGIN</i></p>

    <h3>Most Recent Trip Taken</h3>
      <label class="item label" id="label_Travel_From1" for="Travel_From1">From (YYYY-MM)</label>
       <input class="date" type="date" data-toggle="tooltip"  id="Travel_From1" name="Travel_From1"  />

      <label class="item label" id="label_Travel_To1" for="Travel_To1">To(YYYY-MM)</label>
    <input class="date" type="date" data-toggle="tooltip"  id="Travel_To1" name="Travel_To1"  />

      <label class="item label" id="label_Travel_Place1" for="Travel_Place1">City and Country</label>
    <input type="text" data-toggle="tooltip"  id="Travel_Place1" name="Travel_Place1"  />

      <label class="item label" id="label_Travel_Purpose1" for="Travel_Purpose1">Purpose of Trip</label>
     <input type="text" data-toggle="tooltip"  id="Travel_Purpose1" name="Travel_Purpose1" />

      <label class="item radioLabel" id="label_Visa_Issued1" for="Visa_Issued1">Visa Issued</label>
    <div class="answerbox">
    <div class="radio_container">
    <label class="item">Yes
       <input type="radio" name="Visa_Issued1" value="Yes" />
      <span class="checkmark"></span></label>
      </div>

    <div class="radio_container">
     <label class="item">No
      <input type="radio" name="Visa_Issued1" value="No" />
      <span class="checkmark"></span></label>
     </div>
     </div>

     <h3>Other Previous Trip Taken</h3>
      <label class="item label" id="label_Travel_From2" for="Travel_From2">From (YYYY-MM)</label>
       <input class="date" type="date" data-toggle="tooltip"  id="Travel_From2" name="Travel_From2"  />

      <label class="item label" id="label_Travel_To2" for="Travel_To2">To(YYYY-MM)</label>
    <input class="date" type="date" data-toggle="tooltip"  id="Travel_To2" name="Travel_To2"  />

      <label class="item label" id="label_Travel_Place2" for="Travel_Place2">City and Country</label>
    <input type="text" data-toggle="tooltip"  id="Travel_Place2" name="Travel_Place2"  />

      <label class="item label" id="label_Travel_Purpose2" for="Travel_Purpose2">Purpose of Trip</label>
     <input type="text" data-toggle="tooltip"  id="Travel_Purpose2" name="Travel_Purpose2" />

      <label class="item radioLabel" id="label_Visa_Issued2" for="Visa_Issued2">Visa Issued</label>
    <div class="answerbox">
    <div class="radio_container">
     <label class="item">Yes
       <input type="radio" name="Visa_Issued2" value="Yes" />
      <span class="checkmark"></span></label>
      </div>

       <div class="radio_container">
   <label class="item">No
      <input type="radio" name="Visa_Issued2" value="No" />
      <span class="checkmark"></span></label>
     </div>
</div>
</fieldset>  -->

  <!-- ADDITIONAL QUESTIONS

<fieldset>

  <legend>ADDITIONAL QUESTIONS</legend>

  <label class="item radioLabel" id="Convicted_Crime" for="Convicted_Crime">Have you or your spouse ever been convicted of or currently subject to any criminal proceeding in any country?</label>

 <div class="answerbox">

   <div class="radio_container">
    <label class="item">Yes
     <input type="radio" name="Convicted_Crime" value="Yes" />
      <span class="checkmark"></span>
    </label>
   </div>

   <div class="radio_container">
     <label class="item">No
          <input type="radio" name="Convicted_Crime" value="No" required />
          <span class="checkmark"></span>
    </label>

      </div>

  </div>

   <label class="item radioLabel" id="Claimed_Refugee" for="Claimed_Refugee">Previously sought refugee status in Canada or elsewhere?</label>

  <div class="answerbox">

       <div class="radio_container">
     <label class="item">Yes
       <input type="radio" name="Claimed_Refugee" value="Yes" />
      <span class="checkmark"></span></label>
      </div>

    <div class="radio_container">
    <label class="item">No
    <input type="radio" name="Claimed_Refugee" value="No" required />
    <span class="checkmark"></span></label>
    </div>

    </div>

<label class="item radioLabel" id="Refused_Admission" for="Refused_Admission">Been refused admission to Canada OR any other country?</label>

   <div class="answerbox">

         <div class="radio_container">
         <label class="item">Yes
         <input type="radio" name="Refused_Admission" value="Yes" />
         <span class="checkmark"></span></label>
         </div>

     <div class="radio_container">
      <label class="item">No
    <input type="radio" name="Refused_Admission" value="No"  required />
     <span class="checkmark"></span></label>
    </div>
   </div>


 <label class="item radioLabel" id="Mental_Condition" for="Mental_Condition"> Had a serious disease or mental disorder?</label>

   <div class="answerbox">

    <div class="radio_container">
     <label class="item">Yes
       <input type="radio" name="Mental_Condition" value="Yes" />
      <span class="checkmark"></span></label>
      </div>

    <div class="radio_container">
       <label class="item">No
      <input type="radio" name="Mental_Condition" value="No" />
      <span class="checkmark"></span></label>
     </div>

     </div>

<label class="item radioLabel" id="Hear_About_Us" for="Hear_About_Us"> How did you hear about us? </label>

 <select id="Hear_About_Us" name="Hear_About_Us">
           <option value="family/friend">A family member or friend</option>
           <option value="search">Search Engine (ie Google/Bing)</option>
           <option value="facebook">Facebook</option>
           <option value="Twitter">Twitter</option>
           <option value="LinkedIn">LinkedIn</option>
           <option value="other">Other</option>

     </select>

 <label class="item radioLabel" id="Other_About_Us" for="Other_About_Us"> If other please specify: </label>
 <input type="text" data-toggle="tooltip"  id="Other_About_Us" /> -->
<!--
 <div class=""> <label class="item required" for="userfile"><input type="hidden" name="MAX_FILE_SIZE" value="10000000" >Attach your Resume (pdf/doc file only):</label><input name="userfile" type="file" required> </div>
-->

    <label for="Newsletter" class="newsletter">
      <input type="checkbox" id="Newsletter" name="Newsletter" value="Yes" />
      Yes, please send me a newsletter from JobCanada.org!
    </label>
 

<!--   <div class="g-recaptcha" data-sitekey="6LflOuIZAAAAAJ428uQ2LbwR8yr_ZP00ynbdxbl5" data-callback="verifyCaptcha"></div>
  <div id="g-recaptcha-error"></div> -->

  </fieldset>

 <div class="buttonContainer">
 <button type="submit" name="submit" value="submit" class="button">submit</button>
 <button type="reset" name="Reset" value="reset" class="button">reset</button>
 </div>
