@extends('admin.layout')
@section('title', 'Student Details')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title"><span>Student Profile</span></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
            <div class="about-student-profile">
                <h5>About Student</h5>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <img src="{{ asset('storage/student_photos/' . $student->photo) }}" alt=""
                            class="about-student-image">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <h4>{{ $student->full_names }}</h4>
                        <p>Lorem ipsum dolor d eaque tempore alias fuga consequuntur!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Full Names</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->full_names }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Adm. Number</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->admission_number }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Class</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->class_admited }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Gender</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->gender }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Date of Birth</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->dob->format('d-m-Y') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Student Email</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->studentuser->email }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Date Admited</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->created_at->format('d-m-Y') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Postal Code</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->postal_office }} - {{ $student->postal_code }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <span>Postal Address</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">
                        {{ $student->postal_address }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12"></div>
                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12"></div>
                </div>
            </div>
        </div> <!-- end col-->
        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
            <div class="top-display-student-profile">
                <section>
                    <div class="left-section">
                        <div>
                            <i class="bi bi-list-check"></i>
                        </div>
                    </div>
                    <div class="right-section">
                        <h4>Last Grade</h4>
                        <h3>A-</h3>
                    </div>
                </section>
                <section>
                    <div class="left-section">
                        <div>
                            <i class="bi bi-calendar3"></i>
                        </div>
                    </div>
                    <div class="right-section">
                        <h4>Attendance</h4>
                        <h3>94%</h3>
                    </div>
                </section>
                <section>
                    <div class="left-section">
                        <div>
                            <i class="bi bi-cash-coin"></i>
                        </div>
                    </div>
                    <div class="right-section">
                        <h4>Fee Balance</h4>
                        <h3>Ksh: 87600</h3>
                    </div>
                </section>
            </div>
            <div class="middle-display-student-profile">
                <table id="studentexams" class="display" style="width:100%">
                    <thead>
                        {{-- <tr>
                            <th rowspan="2">Exam</th>
                            <th colspan="2">HR Information</th>
                            <th colspan="3">Contact</th>
                        </tr> --}}
                        <tr>
                            <th>Exam Name</th>
                            <th>Exam Dates</th>
                            <th>Class</th>
                            <th>Total Points</th>
                            <th>Mean Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>$320,800</td>
                            <td>Edinburgh</td>
                            <td>5421</td>
                            <td>t.nixon@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>$170,750</td>
                            <td>Tokyo</td>
                            <td>8422</td>
                            <td>g.winters@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>$86,000</td>
                            <td>San Francisco</td>
                            <td>1562</td>
                            <td>a.cox@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>$433,060</td>
                            <td>Edinburgh</td>
                            <td>6224</td>
                            <td>c.kelly@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>$162,700</td>
                            <td>Tokyo</td>
                            <td>5407</td>
                            <td>a.satou@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>$372,000</td>
                            <td>New York</td>
                            <td>4804</td>
                            <td>b.williamson@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>$137,500</td>
                            <td>San Francisco</td>
                            <td>9608</td>
                            <td>h.chandler@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>$327,900</td>
                            <td>Tokyo</td>
                            <td>6200</td>
                            <td>r.davidson@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>$205,500</td>
                            <td>San Francisco</td>
                            <td>2360</td>
                            <td>c.hurst@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>$103,600</td>
                            <td>Edinburgh</td>
                            <td>1667</td>
                            <td>s.frost@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>$90,560</td>
                            <td>London</td>
                            <td>3814</td>
                            <td>j.gaines@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>$342,000</td>
                            <td>Edinburgh</td>
                            <td>9497</td>
                            <td>q.flynn@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>$470,600</td>
                            <td>San Francisco</td>
                            <td>6741</td>
                            <td>c.marshall@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>$313,500</td>
                            <td>London</td>
                            <td>3597</td>
                            <td>h.kennedy@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>$385,750</td>
                            <td>London</td>
                            <td>1965</td>
                            <td>t.fitzpatrick@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>$198,500</td>
                            <td>London</td>
                            <td>1581</td>
                            <td>m.silva@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>$725,000</td>
                            <td>New York</td>
                            <td>3059</td>
                            <td>p.byrd@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>$237,500</td>
                            <td>New York</td>
                            <td>1721</td>
                            <td>g.little@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>$132,000</td>
                            <td>London</td>
                            <td>2558</td>
                            <td>b.greer@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>$217,500</td>
                            <td>Edinburgh</td>
                            <td>2290</td>
                            <td>d.rios@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>$345,000</td>
                            <td>New York</td>
                            <td>1937</td>
                            <td>j.caldwell@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>$675,000</td>
                            <td>New York</td>
                            <td>6154</td>
                            <td>y.berry@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>$106,450</td>
                            <td>New York</td>
                            <td>8330</td>
                            <td>c.vance@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>$85,600</td>
                            <td>Sydney</td>
                            <td>3023</td>
                            <td>d.wilder@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>$1,200,000</td>
                            <td>London</td>
                            <td>5797</td>
                            <td>a.ramos@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>$92,575</td>
                            <td>Edinburgh</td>
                            <td>8822</td>
                            <td>g.joyce@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>$357,650</td>
                            <td>Singapore</td>
                            <td>9239</td>
                            <td>j.chang@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>$206,850</td>
                            <td>San Francisco</td>
                            <td>1314</td>
                            <td>b.wagner@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>$850,000</td>
                            <td>San Francisco</td>
                            <td>2947</td>
                            <td>f.green@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>$163,000</td>
                            <td>Tokyo</td>
                            <td>8899</td>
                            <td>s.itou@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>$95,400</td>
                            <td>Sydney</td>
                            <td>2769</td>
                            <td>m.house@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>$114,500</td>
                            <td>London</td>
                            <td>6832</td>
                            <td>s.burks@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>$145,000</td>
                            <td>London</td>
                            <td>3606</td>
                            <td>p.bartlett@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>$235,500</td>
                            <td>San Francisco</td>
                            <td>2860</td>
                            <td>g.cortez@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>$324,050</td>
                            <td>Edinburgh</td>
                            <td>8240</td>
                            <td>m.mccray@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>$85,675</td>
                            <td>San Francisco</td>
                            <td>5384</td>
                            <td>u.butler@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>$164,500</td>
                            <td>San Francisco</td>
                            <td>7031</td>
                            <td>h.hatfield@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>$109,850</td>
                            <td>San Francisco</td>
                            <td>6318</td>
                            <td>h.fuentes@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>$452,500</td>
                            <td>San Francisco</td>
                            <td>9422</td>
                            <td>v.harrell@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>$136,200</td>
                            <td>London</td>
                            <td>7580</td>
                            <td>t.mooney@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>$645,750</td>
                            <td>New York</td>
                            <td>1042</td>
                            <td>j.bradshaw@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>$234,500</td>
                            <td>Singapore</td>
                            <td>2120</td>
                            <td>o.liang@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>$163,500</td>
                            <td>London</td>
                            <td>6222</td>
                            <td>b.nash@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>$139,575</td>
                            <td>Tokyo</td>
                            <td>9383</td>
                            <td>s.yamamoto@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>$98,540</td>
                            <td>New York</td>
                            <td>8327</td>
                            <td>t.walton@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>$87,500</td>
                            <td>San Francisco</td>
                            <td>2927</td>
                            <td>f.camacho@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>$138,575</td>
                            <td>Singapore</td>
                            <td>8352</td>
                            <td>s.baldwin@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>$125,250</td>
                            <td>New York</td>
                            <td>7439</td>
                            <td>z.frank@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>$115,000</td>
                            <td>San Francisco</td>
                            <td>4389</td>
                            <td>z.serrano@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>$75,650</td>
                            <td>Edinburgh</td>
                            <td>3431</td>
                            <td>j.acosta@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>$145,600</td>
                            <td>New York</td>
                            <td>3990</td>
                            <td>c.stevens@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>$356,250</td>
                            <td>London</td>
                            <td>1016</td>
                            <td>h.butler@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>$103,500</td>
                            <td>London</td>
                            <td>6733</td>
                            <td>l.greer@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>$86,500</td>
                            <td>San Francisco</td>
                            <td>8196</td>
                            <td>j.alexander@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>$183,000</td>
                            <td>Edinburgh</td>
                            <td>6373</td>
                            <td>s.decker@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>$183,000</td>
                            <td>Singapore</td>
                            <td>5384</td>
                            <td>m.bruce@datatables.net</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>$112,000</td>
                            <td>New York</td>
                            <td>4226</td>
                            <td>d.snider@datatables.net</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Salary</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>E-mail</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

@endsection
