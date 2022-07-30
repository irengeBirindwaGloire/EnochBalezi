 <main>
     <div class="container-fluid px-4">
         <h1 class="mt-4">Dashboard</h1>
         <ol class="breadcrumb mb-4">
             <li class="breadcrumb-item active">Dashboard</li>
         </ol>
         <?= @$_SESSION['message'] ?>
         <div class="row">
             <div class="col-xl-3 col-md-6">
                 <div class="card bg-primary text-white mb-4">
                     <div class="card-body"><strong>Total Elèves</strong> </div>
                     <div class="card-footer" align="center">
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-md-6">
                 <div class="card bg-warning text-white mb-4">
                     <div class="card-body"><strong>Total Enseignants</strong> </div>
                     <div class="card-footer" align="center">

                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-md-6">
                 <div class="card bg-success text-white mb-4">
                     <div class="card-body"><strong>Total Classes</strong> </div>
                     <div class="card-footer" align="center">

                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-md-6">
                 <div class="card bg-danger text-white mb-4">
                     <div class="card-body"><strong>Utilisateurs</strong></div>
                     <div class="card-footer" align="center">

                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-xl-6">
                 <div class="card mb-4">
                     <div class="card-header">
                         <i class="fas fa-chart-area me-1"></i>
                         Area Chart Example
                     </div>
                     <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                 </div>
             </div>
             <div class="col-xl-6">
                 <div class="card mb-4">
                     <div class="card-header">
                         <i class="fas fa-chart-bar me-1"></i>
                         Bar Chart Example
                     </div>
                     <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                 </div>
             </div>
         </div>

     </div>
 </main>