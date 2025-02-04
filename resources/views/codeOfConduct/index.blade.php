@extends('layouts.master')
@section('content')
<style>
    .condact p  {
        font-size: 18px;
        text-align: justify;
        color: #000;
        line-height: 25px;
        margin-bottom: 20px;

    }
    .condact h4, h3{
        color: #000;
        font-weight: 600;
        margin-bottom: 20px;

    }
</style>
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Code of Conduct
            </h4>
            <ol class="d-flax justify-content-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Code of Conduct</a></li>
                </li>
            </ol>
        </div>

    </div>
</section>
<div class="container py-5 condact">
    <h4 class="text-center text-bold">Dhaka International University Code of Student Conduct
    <h3 class="text-center">INTRODUCTION</h3> 
   
    <p>1. The Code of Student Conduct is built on the principle that all students are expected to maintain a standard of conduct which supports the University’s commitment to excellence in education and promotes good order and the good name and reputation of the University. </p>
    <p>2. All students at the University agree to be bound by all relevant provisions of the Statutes, Ordinances and Regulations of the University, which include this Code of Student Conduct. </p>
    <h4>Scope  </h4>           
    <p>3. The Student Conduct Regulations and Procedures apply in relation to any activities engaged in, or services and facilities enjoyed, as a student of the University, or in the vicinity of any premises owned, leased or managed by the University. Disciplinary action may also be taken against a student in respect of any alleged misconduct wherever and whenever it may have taken place when it is considered necessary to protect the interests and reputation of the University and its members. </p>

    <h4>Definition</h4>
    <p>
        Discipline is the practice of training people to obey rules or code of behaviour, aiming at improving or attempting to improve the behaviour or disorderliness.
    </p>
    <h4> Alcohol and Drug Use </h4>
    <p>
        4. Being under the influence of alcohol or drugs will not normally be accepted as a mitigating factor or an excuse for behaviour leading to breaches of the Student Conduct Regulations.
    </p> 
    <h4>Mental Health, Illness or Disability  </h4>
    <p>
        5. Where there is concern that mental health, illness or disability may have impacted or continues to impact negatively on a student’s behaviour, the proceedings may be adjourned at any stage for the matter to be considered by University Authority or policy as appropriate.
    </p>
    <h4>Criminal Investigations and Convictions</h4>
    <p>
        6. Students are required to notify the Proctor immediately of any conviction of a criminal offence in a Court of law or formal caution for a criminal offence by a police officer. 
    </p>
    <p>
        7. In case of alleged breaches of conduct which would also constitute serious offences under criminal law, the disciplinary proceeding is resolved through criminal investigation or trial. Conviction by the Police or in a Criminal Court will be taken as conclusive evidence that the alleged offence has occurred, and no further investigation will be required by the University. 
    </p>
    <p>
        8. Under the circumstances, the focus of any subsequent University Conduct proceedings will include an assessment of the risk posed to students. Any penalty imposed by the Criminal Court will be taken into account.
    </p>
    <p>
        9. Whilst criminal investigations are underway, the student is obliged to keep the University informed of any progress or change in status regarding his/her case. The Proctor, or Nominee, will review the case on a monthly basis and make recommendations if any action is required during this period. 
    </p>
    <p>
        10. Where the victim of an alleged offence chooses not to report the matter to the police or does not co-operate with their inquiries, and irrespective of whether or not a preference for internal disposal has been indicated, the University reserves the right not to invoke the Student Conduct Procedures. 
    </p>
    <p>
        11. In cases where an allegation is withdrawn, the University reserves the right to continue with its investigations and to invoke internal Conduct Procedures or refer the matter to the Police as appropriate. 
    </p>
    <p>
        12. In the case of a Criminal conviction, where proceedings (including bail conditions, period of time spent on remand, period of time served in custody following conviction) result in a student being absent from his/her studies for a period of fewer than 12 (Twelve) months the student will normally be required to intermit from his/her studies for this period. It is the student’s responsibility to notify his/her Appeals and Complaints in the Office of the Proctor of the date of his/her release from custody and the matter will then be referred to a Discipline Committee to determine whether the nature of the offence poses an ongoing risk to the University community, and whether there are any outstanding matters of concern that have not been addressed by the criminal proceedings. 
    </p>
    <p>
        13. In the case of a Criminal conviction, where proceedings (including bail conditions, period of time spent on remand, period of time served in custody following conviction) result in a student being absent from his/her studies for a period of 12 (Twelve) months or more, the student will be deemed withdrawn from the University. The student may then reapply for admission to the University, and as part of the standard re-admission process will be required to declare criminal convictions to be considered prior to a decision regarding an offer of a place. 
    </p>
    <h4>With-holding of Degrees </h4>
    <p>
        14. Except with the special permission of the Syndicate, no degree of the University will be conferred upon, or certificate or diploma of the University granted to, a person who is subject to on-going action in accordance with the procedures contained in this Code of Student Conduct, including the hearing of any appeal under the procedures or outstanding Criminal investigations or proceedings. 
    </p>
    <h4>Office of Proctor and Disciplinary Committee</h4>
    <p>
        15. The Office of Proctor and Disciplinary Committee shall co-ordinate all aspects of the administration and delivery of the Student Code of Conduct across all University Campuses. All matters related to Student Conduct should be addressed to this office in the first instance. 
    </p>
    <h4>The Proctor  </h4>
    <p>
        16. The Proctor will be the member-secretary of Disciplinary Committee. S/he is responsible for investigating alleged breaches of the Student Conduct Regulations and has the power to impose a minor range of penalties, including the payment of fines and repair/replacement costs for minor offences. More serious cases are referred by the Proctor to Disciplinary Committee and the Proctor is required to attend to present the case against the student. 
    </p>
    <p>
        17. The Proctor reports annually to the Syndicate on all matters relating to student conduct that have been investigated during the preceding academic year. In addition, s/he considers all referrals of serious offences and all appeals in the first instance and convenes the Discipline Committee as appropriate. 
    </p>

    <h4>STUDENT CONDUCT REGULATIONS </h4>
    <p><b>18. The following behaviour shall be treated as a breach of the Conduct Regulations which may result in disciplinary action being taken: 
    </b></p>

    <p>
        18.1 infringing or attempting to infringe a Regulation of the University; 
    </p>
    <p>
        18.2 attempting or inciting others to infringe a Regulation of the University; 
    </p>
    <p>
        18.3 having been convicted of a criminal offence in a court of law or formally  cautioned for a criminal; 
    </p>
    <p>
        18.4 failing to disclose the conviction of a criminal offence by a court of law or a formal caution by a police officer for a criminal offence;
    </p>
    <p>
        18.5 behaviour that may be likely to bring the University into disrepute; 
    </p>
    <p>
        18.6 exhibiting threatening, intimidating or violent behaviour;  
    </p>
    <p>
        18.7 exhibiting indecent or abusive language or behaviour; 
    </p>
    <p>
        18.8 exhibiting disorderly behaviour; 
    </p>
    <p>
        18.9 using, selling or possessing within the University any controlled drug;
    </p>
    <p>
        18.10 possessing within the University any offensive weapon;
    </p>
    <p>
        18.11 behaving in a manner that amounts to harassment as defined by law; 
    </p>
    <p>
        18.12 creating, or causing to be created, excessive noise which causes discomfort, inconvenience or annoyance to authorised users of the University premises;

    </p>
    <p>
        18.13 behaviour that is discourteous, disrespectful or uncooperative towards a member of the University;
    </p>
    <p>
        18.14 committing theft within the University;
    </p>
    <p>
        18.15 committing or attempting to commit any fraud in relation to any money due to the University or any debt owed to the University by any student;
    </p>
    <p>
        18.16 behaviour that is likely to cause injury or impair safety on University premises;
    </p>
    <p>
        18.17 misusing fire detection equipment, fire prevention equipment or fire-fighting appliances within the University; 
    </p>
    <p>
        18.18 sounding or raising of a fire alarm within the University when it is unwarranted; 
    </p>
    <p>
        18.19 failing to immediately evacuate any part of the University or University-owned or administered accommodation, when a fire alarm sounds or returning before being told it is safe to do so by a fire officer or authorised member of the University staff; 
    </p>
    <p>
        18.20 interfering with, or impeding, or failing to comply with any member of the University in carrying out his/her duty or proper function as such; 
    </p>
    <p>
        18.21 failing to disclose name and other relevant details to an employee of the University when it is reasonable to require that such information be given;
    </p>
    <p>
        18.22 interfering with or impeding, by the use of intimidation, violence, threat of violence or physical obstruction, the supply or delivery of any goods or services to the University, or interfering with or impeding the entry into the University of any lawful visitor; 
    </p>
    <p>
        18.23 interfering with any mechanical, electrical or other services or installations within the University without the authority to do so; 
    </p>
    <p>
        18.24 causing actual or potential damage to, defacement, misappropriation or unauthorised use of the property of the University and its grounds; 
    </p>
    <p>
        18.25 disposing of litter inappropriately within the University; 
    </p>
    <p>
        18.26	behaving in a manner which obstructs, frustrates or disrupts: 
    </p>
 <div class="pl-3">
    <p>a.   any lecture, class or other instruction, or any laboratory work, or any examinations, authorised to be held, given or undertaken within the University; or 
    </p>
    <p>
        b.	any meeting or other function (including social or sporting activities) authorised to take place within the University; or 
    </p>
    <p>
        c.	the satisfactory conduct of the administrative work of the University or its public or official functions, activities or legal duties; 
    </p>
 </div>
 <p>
    18.27 publishing any matter (including expressed orally or in any writing, sign or visible representation, including electronically) which is threatening, abusive or insulting or constitutes harassment or makes others fear violence, including: 
 </p>

 <div class="pl-3">
    <p>a. by printing or displaying within the University or</p>
    <p>b. by publishing or distributing to any visitor or member of the University or</p>
    <p>c. by using in any form of instruction, meeting or gathering (including social and sporting activities) or</p>
    <p>
        d. by broadcasting to any visitor or member of the University;  
    </p>
 </div>
 <p>
    18.28 using electronic and social media in a way that constitutes a breach of any    other Student Conduct Regulation; 
 </p>
 <p>
    18.29 forging, falsifying or misusing the University’s name or any University record or document, or knowingly making any false statement or being party to impersonation in relation to any academic examination or assessment or University administrative function or service. This includes, but is not limited to, the use of false documentation or statement in the process of gaining admission to the University;
 </p>
 <p>
    18.30 behaving in a manner that causes, or is likely to cause, death, unnecessary suffering, harm or distress to any species of wildlife or domesticated or semi-domesticated animal;
 </p>
 <p>
    18.31 failing to comply with the terms and conditions of the contract for Accommodation; 
 </p>
 <p>
    18.32 failing to comply with the ‘Guidelines for Use of IT Facilities’; 
 </p>
 <p>
    18.33 failing to comply with any direction or restriction, imposed by the Librarian in respect of the use of Library facilities; 
 </p>
 <p>
    18.34 failing to comply with the University’s No Smoking Policy; 
 </p>
 <p>
    18.35  failing to comply with a resolution previously imposed by the Vice-Chancellor, the Proctor, the Associate Proctor (Residents’ Conduct) or his/her nominee, a Discipline Committee of Appeal, from the time of the notification of the resolution or such other time as is authorised by the Proctor, save that a period of 28 (Twenty Eight) days (or exceptionally, a longer period as specified by the Proctor) is allowed for the payment of fines, damages and costs; 
 </p>
 <p>
    18.36 making an allegation which is deemed to be vexatious, malicious or false;
 </p>
 <p>
    18.37 attempting to undermine or undermining the University’s obligations in respect of Bangladeshi Immigration policy; 
 </p>
 <p>
    18.38 failing to comply with the University’s policy and procedures for attendance monitoring or misuse of a student registration card or a ‘Count-me-in’ electronic reader in relation to attendance monitoring; 
 </p>
<p>
    18.39 any other behaviour that is deemed to contravene the general principles of the Code of Student Conduct and any act prejudicial to the interest of the University.
</p>
<p>
    18.40 Committing any act offending the modesty of women or an act of eve-teasing within the campus premises of the University. 

</p>
   
       
    
  
    
        
    

   
    
</div>


   
@endsection
