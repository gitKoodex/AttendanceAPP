{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
    </ol>
  </div>
  <!-- row -->
  
  
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Datatable</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="display min-w850">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td>2011/07/25</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td>2009/01/12</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2012/03/29</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td>2008/11/28</td>
                  <td>$162,700</td>
                </tr>
                <tr>
                  <td>Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2012/12/02</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>59</td>
                  <td>2012/08/06</td>
                  <td>$137,500</td>
                </tr>
                <tr>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td>55</td>
                  <td>2010/10/14</td>
                  <td>$327,900</td>
                </tr>
                <tr>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td>39</td>
                  <td>2009/09/15</td>
                  <td>$205,500</td>
                </tr>
                <tr>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td>23</td>
                  <td>2008/12/13</td>
                  <td>$103,600</td>
                </tr>
                <tr>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>30</td>
                  <td>2008/12/19</td>
                  <td>$90,560</td>
                </tr>
                <tr>
                  <td>Quinn Flynn</td>
                  <td>Support Lead</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2013/03/03</td>
                  <td>$342,000</td>
                </tr>
                <tr>
                  <td>Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>36</td>
                  <td>2008/10/16</td>
                  <td>$470,600</td>
                </tr>
                <tr>
                  <td>Haley Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>London</td>
                  <td>43</td>
                  <td>2012/12/18</td>
                  <td>$313,500</td>
                </tr>
                <tr>
                  <td>Tatyana Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>19</td>
                  <td>2010/03/17</td>
                  <td>$385,750</td>
                </tr>
                <tr>
                  <td>Michael Silva</td>
                  <td>Marketing Designer</td>
                  <td>London</td>
                  <td>66</td>
                  <td>2012/11/27</td>
                  <td>$198,500</td>
                </tr>
                <tr>
                  <td>Paul Byrd</td>
                  <td>Chief Financial Officer (CFO)</td>
                  <td>New York</td>
                  <td>64</td>
                  <td>2010/06/09</td>
                  <td>$725,000</td>
                </tr>
                <tr>
                  <td>Gloria Little</td>
                  <td>Systems Administrator</td>
                  <td>New York</td>
                  <td>59</td>
                  <td>2009/04/10</td>
                  <td>$237,500</td>
                </tr>
                <tr>
                  <td>Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>41</td>
                  <td>2012/10/13</td>
                  <td>$132,000</td>
                </tr>
                <tr>
                  <td>Dai Rios</td>
                  <td>Personnel Lead</td>
                  <td>Edinburgh</td>
                  <td>35</td>
                  <td>2012/09/26</td>
                  <td>$217,500</td>
                </tr>
                <tr>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>New York</td>
                  <td>30</td>
                  <td>2011/09/03</td>
                  <td>$345,000</td>
                </tr>
                <tr>
                  <td>Yuri Berry</td>
                  <td>Chief Marketing Officer (CMO)</td>
                  <td>New York</td>
                  <td>40</td>
                  <td>2009/06/25</td>
                  <td>$675,000</td>
                </tr>
                <tr>
                  <td>Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td>21</td>
                  <td>2011/12/12</td>
                  <td>$106,450</td>
                </tr>
                <tr>
                  <td>Doris Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Sidney</td>
                  <td>23</td>
                  <td>2010/09/20</td>
                  <td>$85,600</td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2009/10/09</td>
                  <td>$1,200,000</td>
                </tr>
                <tr>
                  <td>Gavin Joyce</td>
                  <td>Developer</td>
                  <td>Edinburgh</td>
                  <td>42</td>
                  <td>2010/12/22</td>
                  <td>$92,575</td>
                </tr>
                <tr>
                  <td>Jennifer Chang</td>
                  <td>Regional Director</td>
                  <td>Singapore</td>
                  <td>28</td>
                  <td>2010/11/14</td>
                  <td>$357,650</td>
                </tr>
                <tr>
                  <td>Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>28</td>
                  <td>2011/06/07</td>
                  <td>$206,850</td>
                </tr>
                <tr>
                  <td>Fiona Green</td>
                  <td>Chief Operating Officer (COO)</td>
                  <td>San Francisco</td>
                  <td>48</td>
                  <td>2010/03/11</td>
                  <td>$850,000</td>
                </tr>
                <tr>
                  <td>Shou Itou</td>
                  <td>Regional Marketing</td>
                  <td>Tokyo</td>
                  <td>20</td>
                  <td>2011/08/14</td>
                  <td>$163,000</td>
                </tr>
                <tr>
                  <td>Michelle House</td>
                  <td>Integration Specialist</td>
                  <td>Sidney</td>
                  <td>37</td>
                  <td>2011/06/02</td>
                  <td>$95,400</td>
                </tr>
                <tr>
                  <td>Suki Burks</td>
                  <td>Developer</td>
                  <td>London</td>
                  <td>53</td>
                  <td>2009/10/22</td>
                  <td>$114,500</td>
                </tr>
                <tr>
                  <td>Prescott Bartlett</td>
                  <td>Technical Author</td>
                  <td>London</td>
                  <td>27</td>
                  <td>2011/05/07</td>
                  <td>$145,000</td>
                </tr>
                <tr>
                  <td>Gavin Cortez</td>
                  <td>Team Leader</td>
                  <td>San Francisco</td>
                  <td>22</td>
                  <td>2008/10/26</td>
                  <td>$235,500</td>
                </tr>
                <tr>
                  <td>Martena Mccray</td>
                  <td>Post-Sales support</td>
                  <td>Edinburgh</td>
                  <td>46</td>
                  <td>2011/03/09</td>
                  <td>$324,050</td>
                </tr>
                <tr>
                  <td>Unity Butler</td>
                  <td>Marketing Designer</td>
                  <td>San Francisco</td>
                  <td>47</td>
                  <td>2009/12/09</td>
                  <td>$85,675</td>
                </tr>
                <tr>
                  <td>Howard Hatfield</td>
                  <td>Office Manager</td>
                  <td>San Francisco</td>
                  <td>51</td>
                  <td>2008/12/16</td>
                  <td>$164,500</td>
                </tr>
                <tr>
                  <td>Hope Fuentes</td>
                  <td>Secretary</td>
                  <td>San Francisco</td>
                  <td>41</td>
                  <td>2010/02/12</td>
                  <td>$109,850</td>
                </tr>
                <tr>
                  <td>Vivian Harrell</td>
                  <td>Financial Controller</td>
                  <td>San Francisco</td>
                  <td>62</td>
                  <td>2009/02/14</td>
                  <td>$452,500</td>
                </tr>
                <tr>
                  <td>Timothy Mooney</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>37</td>
                  <td>2008/12/11</td>
                  <td>$136,200</td>
                </tr>
                <tr>
                  <td>Jackson Bradshaw</td>
                  <td>Director</td>
                  <td>New York</td>
                  <td>65</td>
                  <td>2008/09/26</td>
                  <td>$645,750</td>
                </tr>
                <tr>
                  <td>Olivia Liang</td>
                  <td>Support Engineer</td>
                  <td>Singapore</td>
                  <td>64</td>
                  <td>2011/02/03</td>
                  <td>$234,500</td>
                </tr>
                <tr>
                  <td>Bruno Nash</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>38</td>
                  <td>2011/05/03</td>
                  <td>$163,500</td>
                </tr>
                <tr>
                  <td>Sakura Yamamoto</td>
                  <td>Support Engineer</td>
                  <td>Tokyo</td>
                  <td>37</td>
                  <td>2009/08/19</td>
                  <td>$139,575</td>
                </tr>
                <tr>
                  <td>Thor Walton</td>
                  <td>Developer</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2013/08/11</td>
                  <td>$98,540</td>
                </tr>
                <tr>
                  <td>Finn Camacho</td>
                  <td>Support Engineer</td>
                  <td>San Francisco</td>
                  <td>47</td>
                  <td>2009/07/07</td>
                  <td>$87,500</td>
                </tr>
                <tr>
                  <td>Serge Baldwin</td>
                  <td>Data Coordinator</td>
                  <td>Singapore</td>
                  <td>64</td>
                  <td>2012/04/09</td>
                  <td>$138,575</td>
                </tr>
                <tr>
                  <td>Zenaida Frank</td>
                  <td>Software Engineer</td>
                  <td>New York</td>
                  <td>63</td>
                  <td>2010/01/04</td>
                  <td>$125,250</td>
                </tr>
                <tr>
                  <td>Zorita Serrano</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>56</td>
                  <td>2012/06/01</td>
                  <td>$115,000</td>
                </tr>
                <tr>
                  <td>Jennifer Acosta</td>
                  <td>Junior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>43</td>
                  <td>2013/02/01</td>
                  <td>$75,650</td>
                </tr>
                <tr>
                  <td>Cara Stevens</td>
                  <td>Sales Assistant</td>
                  <td>New York</td>
                  <td>46</td>
                  <td>2011/12/06</td>
                  <td>$145,600</td>
                </tr>
                <tr>
                  <td>Hermione Butler</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2011/03/21</td>
                  <td>$356,250</td>
                </tr>
                <tr>
                  <td>Lael Greer</td>
                  <td>Systems Administrator</td>
                  <td>London</td>
                  <td>21</td>
                  <td>2009/02/27</td>
                  <td>$103,500</td>
                </tr>
                <tr>
                  <td>Jonas Alexander</td>
                  <td>Developer</td>
                  <td>San Francisco</td>
                  <td>30</td>
                  <td>2010/07/14</td>
                  <td>$86,500</td>
                </tr>
                <tr>
                  <td>Shad Decker</td>
                  <td>Regional Director</td>
                  <td>Edinburgh</td>
                  <td>51</td>
                  <td>2008/11/13</td>
                  <td>$183,000</td>
                </tr>
                <tr>
                  <td>Michael Bruce</td>
                  <td>Javascript Developer</td>
                  <td>Singapore</td>
                  <td>29</td>
                  <td>2011/06/27</td>
                  <td>$183,000</td>
                </tr>
                <tr>
                  <td>Donna Snider</td>
                  <td>Customer Support</td>
                  <td>New York</td>
                  <td>27</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Datatable</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example2" class="display">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td>2011/07/25</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td>2009/01/12</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2012/03/29</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td>2008/11/28</td>
                  <td>$162,700</td>
                </tr>
                <tr>
                  <td>Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2012/12/02</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>59</td>
                  <td>2012/08/06</td>
                  <td>$137,500</td>
                </tr>
                <tr>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td>55</td>
                  <td>2010/10/14</td>
                  <td>$327,900</td>
                </tr>
                <tr>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td>39</td>
                  <td>2009/09/15</td>
                  <td>$205,500</td>
                </tr>
                <tr>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td>23</td>
                  <td>2008/12/13</td>
                  <td>$103,600</td>
                </tr>
                <tr>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>30</td>
                  <td>2008/12/19</td>
                  <td>$90,560</td>
                </tr>
                <tr>
                  <td>Quinn Flynn</td>
                  <td>Support Lead</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2013/03/03</td>
                  <td>$342,000</td>
                </tr>
                <tr>
                  <td>Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>36</td>
                  <td>2008/10/16</td>
                  <td>$470,600</td>
                </tr>
                <tr>
                  <td>Haley Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>London</td>
                  <td>43</td>
                  <td>2012/12/18</td>
                  <td>$313,500</td>
                </tr>
                <tr>
                  <td>Tatyana Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>19</td>
                  <td>2010/03/17</td>
                  <td>$385,750</td>
                </tr>
                <tr>
                  <td>Michael Silva</td>
                  <td>Marketing Designer</td>
                  <td>London</td>
                  <td>66</td>
                  <td>2012/11/27</td>
                  <td>$198,500</td>
                </tr>
                <tr>
                  <td>Paul Byrd</td>
                  <td>Chief Financial Officer (CFO)</td>
                  <td>New York</td>
                  <td>64</td>
                  <td>2010/06/09</td>
                  <td>$725,000</td>
                </tr>
                <tr>
                  <td>Gloria Little</td>
                  <td>Systems Administrator</td>
                  <td>New York</td>
                  <td>59</td>
                  <td>2009/04/10</td>
                  <td>$237,500</td>
                </tr>
                <tr>
                  <td>Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>41</td>
                  <td>2012/10/13</td>
                  <td>$132,000</td>
                </tr>
                <tr>
                  <td>Dai Rios</td>
                  <td>Personnel Lead</td>
                  <td>Edinburgh</td>
                  <td>35</td>
                  <td>2012/09/26</td>
                  <td>$217,500</td>
                </tr>
                <tr>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>New York</td>
                  <td>30</td>
                  <td>2011/09/03</td>
                  <td>$345,000</td>
                </tr>
                <tr>
                  <td>Yuri Berry</td>
                  <td>Chief Marketing Officer (CMO)</td>
                  <td>New York</td>
                  <td>40</td>
                  <td>2009/06/25</td>
                  <td>$675,000</td>
                </tr>
                <tr>
                  <td>Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>New York</td>
                  <td>21</td>
                  <td>2011/12/12</td>
                  <td>$106,450</td>
                </tr>
                <tr>
                  <td>Doris Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Sidney</td>
                  <td>23</td>
                  <td>2010/09/20</td>
                  <td>$85,600</td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2009/10/09</td>
                  <td>$1,200,000</td>
                </tr>
                <tr>
                  <td>Gavin Joyce</td>
                  <td>Developer</td>
                  <td>Edinburgh</td>
                  <td>42</td>
                  <td>2010/12/22</td>
                  <td>$92,575</td>
                </tr>
                <tr>
                  <td>Jennifer Chang</td>
                  <td>Regional Director</td>
                  <td>Singapore</td>
                  <td>28</td>
                  <td>2010/11/14</td>
                  <td>$357,650</td>
                </tr>
                <tr>
                  <td>Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>28</td>
                  <td>2011/06/07</td>
                  <td>$206,850</td>
                </tr>
                <tr>
                  <td>Fiona Green</td>
                  <td>Chief Operating Officer (COO)</td>
                  <td>San Francisco</td>
                  <td>48</td>
                  <td>2010/03/11</td>
                  <td>$850,000</td>
                </tr>
                <tr>
                  <td>Shou Itou</td>
                  <td>Regional Marketing</td>
                  <td>Tokyo</td>
                  <td>20</td>
                  <td>2011/08/14</td>
                  <td>$163,000</td>
                </tr>
                <tr>
                  <td>Michelle House</td>
                  <td>Integration Specialist</td>
                  <td>Sidney</td>
                  <td>37</td>
                  <td>2011/06/02</td>
                  <td>$95,400</td>
                </tr>
                <tr>
                  <td>Suki Burks</td>
                  <td>Developer</td>
                  <td>London</td>
                  <td>53</td>
                  <td>2009/10/22</td>
                  <td>$114,500</td>
                </tr>
                <tr>
                  <td>Prescott Bartlett</td>
                  <td>Technical Author</td>
                  <td>London</td>
                  <td>27</td>
                  <td>2011/05/07</td>
                  <td>$145,000</td>
                </tr>
                <tr>
                  <td>Gavin Cortez</td>
                  <td>Team Leader</td>
                  <td>San Francisco</td>
                  <td>22</td>
                  <td>2008/10/26</td>
                  <td>$235,500</td>
                </tr>
                <tr>
                  <td>Martena Mccray</td>
                  <td>Post-Sales support</td>
                  <td>Edinburgh</td>
                  <td>46</td>
                  <td>2011/03/09</td>
                  <td>$324,050</td>
                </tr>
                <tr>
                  <td>Unity Butler</td>
                  <td>Marketing Designer</td>
                  <td>San Francisco</td>
                  <td>47</td>
                  <td>2009/12/09</td>
                  <td>$85,675</td>
                </tr>
                <tr>
                  <td>Howard Hatfield</td>
                  <td>Office Manager</td>
                  <td>San Francisco</td>
                  <td>51</td>
                  <td>2008/12/16</td>
                  <td>$164,500</td>
                </tr>
                <tr>
                  <td>Hope Fuentes</td>
                  <td>Secretary</td>
                  <td>San Francisco</td>
                  <td>41</td>
                  <td>2010/02/12</td>
                  <td>$109,850</td>
                </tr>
                <tr>
                  <td>Vivian Harrell</td>
                  <td>Financial Controller</td>
                  <td>San Francisco</td>
                  <td>62</td>
                  <td>2009/02/14</td>
                  <td>$452,500</td>
                </tr>
                <tr>
                  <td>Timothy Mooney</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>37</td>
                  <td>2008/12/11</td>
                  <td>$136,200</td>
                </tr>
                <tr>
                  <td>Jackson Bradshaw</td>
                  <td>Director</td>
                  <td>New York</td>
                  <td>65</td>
                  <td>2008/09/26</td>
                  <td>$645,750</td>
                </tr>
                <tr>
                  <td>Olivia Liang</td>
                  <td>Support Engineer</td>
                  <td>Singapore</td>
                  <td>64</td>
                  <td>2011/02/03</td>
                  <td>$234,500</td>
                </tr>
                <tr>
                  <td>Bruno Nash</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td>38</td>
                  <td>2011/05/03</td>
                  <td>$163,500</td>
                </tr>
                <tr>
                  <td>Sakura Yamamoto</td>
                  <td>Support Engineer</td>
                  <td>Tokyo</td>
                  <td>37</td>
                  <td>2009/08/19</td>
                  <td>$139,575</td>
                </tr>
                <tr>
                  <td>Thor Walton</td>
                  <td>Developer</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2013/08/11</td>
                  <td>$98,540</td>
                </tr>
                <tr>
                  <td>Finn Camacho</td>
                  <td>Support Engineer</td>
                  <td>San Francisco</td>
                  <td>47</td>
                  <td>2009/07/07</td>
                  <td>$87,500</td>
                </tr>
                <tr>
                  <td>Serge Baldwin</td>
                  <td>Data Coordinator</td>
                  <td>Singapore</td>
                  <td>64</td>
                  <td>2012/04/09</td>
                  <td>$138,575</td>
                </tr>
                <tr>
                  <td>Zenaida Frank</td>
                  <td>Software Engineer</td>
                  <td>New York</td>
                  <td>63</td>
                  <td>2010/01/04</td>
                  <td>$125,250</td>
                </tr>
                <tr>
                  <td>Zorita Serrano</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td>56</td>
                  <td>2012/06/01</td>
                  <td>$115,000</td>
                </tr>
                <tr>
                  <td>Jennifer Acosta</td>
                  <td>Junior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>43</td>
                  <td>2013/02/01</td>
                  <td>$75,650</td>
                </tr>
                <tr>
                  <td>Cara Stevens</td>
                  <td>Sales Assistant</td>
                  <td>New York</td>
                  <td>46</td>
                  <td>2011/12/06</td>
                  <td>$145,600</td>
                </tr>
                <tr>
                  <td>Hermione Butler</td>
                  <td>Regional Director</td>
                  <td>London</td>
                  <td>47</td>
                  <td>2011/03/21</td>
                  <td>$356,250</td>
                </tr>
                <tr>
                  <td>Lael Greer</td>
                  <td>Systems Administrator</td>
                  <td>London</td>
                  <td>21</td>
                  <td>2009/02/27</td>
                  <td>$103,500</td>
                </tr>
                <tr>
                  <td>Jonas Alexander</td>
                  <td>Developer</td>
                  <td>San Francisco</td>
                  <td>30</td>
                  <td>2010/07/14</td>
                  <td>$86,500</td>
                </tr>
                <tr>
                  <td>Shad Decker</td>
                  <td>Regional Director</td>
                  <td>Edinburgh</td>
                  <td>51</td>
                  <td>2008/11/13</td>
                  <td>$183,000</td>
                </tr>
                <tr>
                  <td>Michael Bruce</td>
                  <td>Javascript Developer</td>
                  <td>Singapore</td>
                  <td>29</td>
                  <td>2011/06/27</td>
                  <td>$183,000</td>
                </tr>
                <tr>
                  <td>Donna Snider</td>
                  <td>Customer Support</td>
                  <td>New York</td>
                  <td>27</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Profile Datatable</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example3" class="display min-w850">
              <thead>
                <tr>
                  <th></th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Gender</th>
                  <th>Education</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Joining Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                  <td>Tiger Nixon</td>
                  <td>Architect</td>
                  <td>Male</td>
                  <td>M.COM., P.H.D.</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                  <td>2011/04/25</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>												
                  </td>												
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Female</td>
                  <td>M.COM., P.H.D.</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2011/07/25</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                  <td>Ashton Cox</td>
                  <td>Junior Technical</td>
                  <td>Male</td>
                  <td>B.COM., M.COM.</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2009/01/12</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                  <td>Cedric Kelly</td>
                  <td>Developer</td>
                  <td>Male</td>
                  <td>B.COM., M.COM.</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2012/03/29</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Female</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2008/11/28</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                  <td>Brielle Williamson</td>
                  <td>Specialist</td>
                  <td>Male</td>
                  <td>B.COM., M.COM.</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2012/12/02</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>Female</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2012/08/06</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                  <td>Rhona Davidson</td>
                  <td>Integration</td>
                  <td>Male</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2010/10/14</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>Female</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2009/09/15</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Male</td>
                  <td>B.COM., M.COM.</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2008/12/13</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>Female</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2008/12/19</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                  <td>Quinn Flynn</td>
                  <td>Support Lead</td>
                  <td>Male</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2013/03/03</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                  <td>Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>Female</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2008/10/16</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                  <td>Haley Kennedy</td>
                  <td>Senior Marketing</td>
                  <td>Male</td>
                  <td>B.COM., M.COM.</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2012/12/18</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                  <td>Tatyana Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>Male</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2010/03/17</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                  <td>Michael Silva</td>
                  <td>Marketing Designer</td>
                  <td>Female</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2012/11/27</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                  <td>Paul Byrd</td>
                  <td>Financial Officer</td>
                  <td>Male</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2010/06/09</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                  <td>Gloria Little</td>
                  <td>Systems Administrator</td>
                  <td>Female</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2009/04/10</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                  <td>Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>Male</td>
                  <td>B.COM., M.COM.</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2012/10/13</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                  <td>Dai Rios</td>
                  <td>Personnel Lead</td>
                  <td>Male</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2012/09/26</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>Female</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2011/09/03</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                  <td>Yuri Berry</td>
                  <td>Marketing Officer</td>
                  <td>Male</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2009/06/25</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                  <td>Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>Male</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2011/12/12</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                  <td>Doris Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Female</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2010/09/20</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                  <td>Angelica Ramos</td>
                  <td>Executive Officer</td>
                  <td>Male</td>
                  <td>B.COM., M.COM.</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2009/10/09</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                  <td>Gavin Joyce</td>
                  <td>Developer</td>
                  <td>Female</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2010/12/22</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                  <td>Jennifer Chang</td>
                  <td>Regional Director</td>
                  <td>Male</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2010/11/14</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                  <td>Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>Female</td>
                  <td>B.TACH, M.TACH</td>
                  <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2011/06/07</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                  <td>Fiona Green</td>
                  <td>Operating Officer</td>
                  <td>Male</td>
                  <td>B.A, B.C.A</td>
                  <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2010/03/11</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                  <td>Shou Itou</td>
                  <td>Regional Marketing</td>
                  <td>Female</td>
                  <td>B.COM., M.COM.</td>
                  <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                  <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                  <td>2011/08/14</td>
                  <td>
                    <div class="d-flex">
                      <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Fees Collection</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example4" class="display min-w850">
              <thead>
                <tr>
                  <th>Roll No</th>
                  <th>Student Name</th>
                  <th>Invoice number</th>
                  <th>Fees Type </th>
                  <th>Payment Type </th>
                  <th>Status </th>
                  <th>Date</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Tiger Nixon</td>
                  <td>#54605</td>
                  <td>Library</td>
                  <td>Cash</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2011/04/25</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Garrett Winters</td>
                  <td>#54687</td>
                  <td>Library</td>
                  <td>Credit Card</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2011/07/25</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Ashton Cox</td>
                  <td>#35672</td>
                  <td>Tuition</td>
                  <td>Cash</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2009/01/12</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Cedric Kelly</td>
                  <td>#57984</td>
                  <td>Annual</td>
                  <td>Credit Card</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2012/03/29</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Airi Satou</td>
                  <td>#12453</td>
                  <td>Library</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2008/11/28</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>Brielle Williamson</td>
                  <td>#59723</td>
                  <td>Tuition</td>
                  <td>Cash</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2012/12/02</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>07</td>
                  <td>Herrod Chandler</td>
                  <td>#98726</td>
                  <td>Tuition</td>
                  <td>Credit Card</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2012/08/06</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>08</td>
                  <td>Rhona Davidson</td>
                  <td>#98721</td>
                  <td>Library</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2010/10/14</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>09</td>
                  <td>Colleen Hurst</td>
                  <td>#54605</td>
                  <td>Annual</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2009/09/15</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Sonya Frost</td>
                  <td>#98734</td>
                  <td>Tuition</td>
                  <td>Credit Card</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2008/12/13</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Jena Gaines</td>
                  <td>#12457</td>
                  <td>Tuition</td>
                  <td>Cash</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2008/12/19</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Quinn Flynn</td>
                  <td>#36987</td>
                  <td>Library</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2013/03/03</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Charde Marshall</td>
                  <td>#98756</td>
                  <td>Tuition</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2008/10/16</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Haley Kennedy</td>
                  <td>#98754</td>
                  <td>Library</td>
                  <td>Cash</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2012/12/18</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Tatyana Fitzpatrick</td>
                  <td>#65248</td>
                  <td>Annual</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2010/03/17</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Michael Silva</td>
                  <td>#75943</td>
                  <td>Tuition</td>
                  <td>Credit Card</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2012/11/27</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>Paul Byrd</td>
                  <td>#87954</td>
                  <td>Library</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2010/06/09</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>18</td>
                  <td>Gloria Little</td>
                  <td>#98746</td>
                  <td>Tuition</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2009/04/10</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>19</td>
                  <td>Bradley Greer</td>
                  <td>#98674</td>
                  <td>Annual</td>
                  <td>Cash</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2012/10/13</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>Dai Rios</td>
                  <td>#69875</td>
                  <td>Tuition</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2012/09/26</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>21</td>
                  <td>Jenette Caldwell</td>
                  <td>#54678</td>
                  <td>Library</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2011/09/03</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>22</td>
                  <td>Yuri Berry</td>
                  <td>#98756</td>
                  <td>Tuition</td>
                  <td>Credit Card</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2009/06/25</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>23</td>
                  <td>Caesar Vance</td>
                  <td>#86754</td>
                  <td>Tuition</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2011/12/12</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>24</td>
                  <td>Doris Wilder</td>
                  <td>#34251</td>
                  <td>Annual</td>
                  <td>Cash</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2010/09/20</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td>Angelica Ramos</td>
                  <td>#65874</td>
                  <td>Tuition</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2009/10/09</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>26</td>
                  <td>Gavin Joyce</td>
                  <td>#54605</td>
                  <td>Female</td>
                  <td>Credit Card</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2010/12/22</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>27</td>
                  <td>Jennifer Chang</td>
                  <td>#54605</td>
                  <td>Tuition</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2010/11/14</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>28</td>
                  <td>Brenden Wagner</td>
                  <td>#45687</td>
                  <td>Library</td>
                  <td>Cheque</td>
                  <td><span class="badge light badge-danger">Udpaid</span></td>
                  <td>2011/06/07</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>29</td>
                  <td>Fiona Green</td>
                  <td>#23456</td>
                  <td>Tuition</td>
                  <td>Cash</td>
                  <td><span class="badge light badge-success">Paid</span></td>
                  <td>2010/03/11</td>
                  <td><strong>120$</strong></td>
                </tr>
                <tr>
                  <td>30</td>
                  <td>Shou Itou</td>
                  <td>#54605</td>
                  <td>Annual</td>
                  <td>Credit Card</td>
                  <td><span class="badge light badge-warning">Panding</span></td>
                  <td>2011/08/14</td>
                  <td><strong>120$</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Patient</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example5" class="display min-w850">
              <thead>
                <tr>
                  <th>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                      <label class="custom-control-label" for="checkAll"></label>
                    </div>
                  </th>
                  <th>Order ID</th>
                  <th>Date Check in</th>
                  <th>Name</th>
                  <th>Assgined</th>
                  <th>Disease</th>
                  <th>Status</th>
                  <th>Table no</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                      <label class="custom-control-label" for="customCheckBox2"></label>
                    </div>
                  </td>
                  <td>#P-00001</td>
                  <td>26/02/2020, 12:42 AM</td>
                  <td>Tiger Nixon</td>
                  <td>Dr. Cedric</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-001</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>												
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
                      <label class="custom-control-label" for="customCheckBox3"></label>
                    </div>
                  </td>
                  <td>#P-00002</td>
                  <td>28/02/2020, 12:42 AM</td>
                  <td>Garrett Winters</td>
                  <td>Dr. Cedric</td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-002</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
                      <label class="custom-control-label" for="customCheckBox4"></label>
                    </div>
                  </td>
                  <td>#P-00003</td>
                  <td>26/02/2020, 12:42 AM</td>
                  <td>Ashton Cox</td>
                  <td>Dr. Rhona</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-success">
                      <i class="fa fa-circle text-success mr-1"></i>
                      Recovered
                    </span>
                  </td>
                  <td>AB-003</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
                      <label class="custom-control-label" for="customCheckBox5"></label>
                    </div>
                  </td>
                  <td>#P-00004</td>
                  <td>29/02/2020, 12:42 AM</td>
                  <td>Ashton Cox</td>
                  <td>Dr. Cedric</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-004</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox6" required="">
                      <label class="custom-control-label" for="customCheckBox6"></label>
                    </div>
                  </td>
                  <td>#P-00005</td>
                  <td>28/02/2020, 12:42 AM</td>
                  <td>Ashton Cox</td>
                  <td>Dr. Cedric</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-005</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox7" required="">
                      <label class="custom-control-label" for="customCheckBox7"></label>
                    </div>
                  </td>
                  <td>#P-00006</td>
                  <td>28/02/2020, 12:42 AM</td>
                  <td>Ashton Cox</td>
                  <td>Dr. Rhona</td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-006</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox8" required="">
                      <label class="custom-control-label" for="customCheckBox8"></label>
                    </div>
                  </td>
                  <td>#P-00007</td>
                  <td>26/02/2020, 12:42 AM</td>
                  <td>Airi Satou</td>
                  <td>Dr. Rhona</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-007</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox9" required="">
                      <label class="custom-control-label" for="customCheckBox9"></label>
                    </div>
                  </td>
                  <td>#P-00008</td>
                  <td>29/02/2020, 12:42 AM</td>
                  <td>Airi Satou</td>
                  <td>Dr. Garrett </td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-008</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox10" required="">
                      <label class="custom-control-label" for="customCheckBox10"></label>
                    </div>
                  </td>
                  <td>#P-00009</td>
                  <td>25/02/2020, 12:42 AM</td>
                  <td>Airi Satou</td>
                  <td>Dr. Rhona</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-009</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox11" required="">
                      <label class="custom-control-label" for="customCheckBox11"></label>
                    </div>
                  </td>
                  <td>#P-00010</td>
                  <td>26/02/2020, 12:42 AM</td>
                  <td>Airi Satou</td>
                  <td>Dr. Rhona</td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-010</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox12" required="">
                      <label class="custom-control-label" for="customCheckBox12"></label>
                    </div>
                  </td>
                  <td>#P-00011</td>
                  <td>28/02/2020, 12:42 AM</td>
                  <td>Airi Satou</td>
                  <td>Dr. Rhona</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-011</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox13" required="">
                      <label class="custom-control-label" for="customCheckBox13"></label>
                    </div>
                  </td>
                  <td>#P-00012</td>
                  <td>29/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Garrett</td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-012</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox14" required="">
                      <label class="custom-control-label" for="customCheckBox14"></label>
                    </div>
                  </td>
                  <td>#P-00013</td>
                  <td>25/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Rhona</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-013</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox15" required="">
                      <label class="custom-control-label" for="customCheckBox15"></label>
                    </div>
                  </td>
                  <td>#P-00014</td>
                  <td>26/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Garrett</td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-014</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox16" required="">
                      <label class="custom-control-label" for="customCheckBox16"></label>
                    </div>
                  </td>
                  <td>#P-00015</td>
                  <td>28/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Rhona</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-015</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox17" required="">
                      <label class="custom-control-label" for="customCheckBox17"></label>
                    </div>
                  </td>
                  <td>#P-00016</td>
                  <td>29/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Garrett</td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-016</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox18" required="">
                      <label class="custom-control-label" for="customCheckBox18"></label>
                    </div>
                  </td>
                  <td>#P-00017</td>
                  <td>25/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Rhona</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-017</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox19" required="">
                      <label class="custom-control-label" for="customCheckBox19"></label>
                    </div>
                  </td>
                  <td>#P-00018</td>
                  <td>26/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Rhona</td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-018</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox20" required="">
                      <label class="custom-control-label" for="customCheckBox20"></label>
                    </div>
                  </td>
                  <td>#P-00019</td>
                  <td>28/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Rhona</td>
                  <td>Cold & Flu</td>
                  <td>
                    <span class="badge light badge-danger">
                      <i class="fa fa-circle text-danger mr-1"></i>
                      New Patient
                    </span>
                  </td>
                  <td>AB-019</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheckBox21" required="">
                      <label class="custom-control-label" for="customCheckBox21"></label>
                    </div>
                  </td>
                  <td>#P-00020</td>
                  <td>25/02/2020, 12:42 AM</td>
                  <td>Sonya Frost</td>
                  <td>Dr. Garrett</td>
                  <td>Sleep Problem</td>
                  <td>
                    <span class="badge light badge-warning">
                      <i class="fa fa-circle text-warning mr-1"></i>
                      In Treatment
                    </span>
                  </td>
                  <td>AB-020</td>
                  <td>
                    <div class="dropdown ml-auto text-right">
                      <div class="btn-link" data-toggle="dropdown">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection