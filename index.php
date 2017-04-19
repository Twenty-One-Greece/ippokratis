<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ippocratis</title>
        <link rel="stylesheet" href="./main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        
        <!--include Menu here-->
        <?php include 'includes/nav.php' ?>

        <div class="jumbotron">
            <h1>HEALTH HUMAN COMFORT</h1>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Δες τα μηχανήματά μας</a></p>
        </div>

        
        <div class="container">
            <!--form-->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="col-md-3">
                        <h4>Ειδικότητα</h4>
                        <select name="" id="">
                            <option value="">Καρδιολογία</option>
                            <option value="">Μαιευτική / Γυναικολογία</option>
                            <option value="">Ουρολογία</option>
                            <option value="">Ακτινολογία</option>
                            <option value="">Ορθοπεδική</option>
                            <option value="">Ενδοκρινολογία</option>
                            <option value="">Παθολογία</option>
                            <option value="">Χειρουργική</option>
                            <option value="">Γαστρεντερολογία</option>
                            <option value="">Γενική ιατρική</option>
                            <option value="">Νεφρολογία</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <h4>Κατηγορία</h4>
                        <select name="" id="">
                            <option value="">Απινιδωτές</option>
                            <option value="">καρδιογράφοι</option>
                            <option value="">Τεστ κοπωσεως</option>
                            <option value="">Σπιρόμετρα</option>
                            <option value="">Monitors</option>
                            <option value="">Λοιπός εξοπλισμός</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <h4>Κατάσταση</h4>
                        <select name="" id="">
                            <option value="">Μεταχειριμένο</option>
                            <option value="">Νέο</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="submit">
                    </div>
                </div>
            </div>
            <!--form-->
            
            <div class="clearfix seperator"></div>
            
            <!--table-->
            <table class="table table-bordered table-index">
                <tr>
                    <td class=""><img src="http://www.ippocratis.gr/sites/default/files/alpinion_ecube_7_0.jpg" alt="..."></td>
                    <td class=""><img src="http://www.ippocratis.gr/sites/default/files/chison-q9_small.jpg" alt="..."></td>
                </tr>
                
                <tr>
                    <td class="">Εγγύηση &nbsp;<i class="glyphicon glyphicon-ok"></i></td>
                    <td class=""><i class="glyphicon glyphicon-remove"></i>&nbsp; Όχι εγγύηση</td>
                </tr>
                <tr>
                    <td class="">gergerg &nbsp;<i class="glyphicon glyphicon-ok"></i></td>
                    <td class=""><i class="glyphicon glyphicon-remove"></i>&nbsp; gergerger</td>
                </tr>
                <tr>
                    <td class="">gergerg &nbsp;<i class="glyphicon glyphicon-ok"></i></td>
                    <td class=""><i class="glyphicon glyphicon-remove"></i>&nbsp; gergerger</td>
                </tr>
            </table>
            <!--table-->
            
            <div class="clearfix seperator"></div>
            
            <!--machines showcase-->
            <div class="row machines">
                <h2>Δείτε τα μηχανήματά μας</h2>
                <h4>Παρέχονται σε άριστη κατάσταση και ελεγμένα.</h4>
                <br>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="http://www.ippocratis.gr/sites/default/files/alpinion_ecube_7_0.jpg" alt="...">
                    <div class="caption">
                        <h3>ALPINION E CUBE 15</h3>
                        <p>Το σύστημα υπερήχων E-CUBE 15 προσφέρει εξαιρετικής ποιότητας εικόνες σε συνδυασμό με την ανώτατη ανάλυση που χρειάζεστε για μια σίγουρη διάγνωση....</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="http://www.ippocratis.gr/sites/default/files/chison-q9_small.jpg" alt="...">
                    <div class="caption">
                        <h3>ΦΟΡΗΤΟΣ ΥΠΕΡΗΧΟΣ CHISON Q9</h3>
                        <p>Φορητός έγχρωμος υπέρηχος Chison Q9 με doppler...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="http://www.ippocratis.gr/sites/default/files/alpinion_e_cube_inno.jpg" alt="...">
                    <div class="caption">
                        <h3>ALPINION E CUBE INNO</h3>
                        <p>Η σειρά υπερήχων της Alpinion συμπληρώνετε με το έγχρωμο φορητό της μοντέλο, το  Alpinion Ecube ΙΝΝΟ...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                    </div>
                </div>
            </div>
            <!--machines showcase-->
            
            
            
        </div>
        <!--container-->
        
        
        <br><br><br><br><br><br><br><br>

        <!--include Menu here-->
        <?php include 'includes/footer.php' ?>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

</html>