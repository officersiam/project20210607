<?php include("header.inc.php"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add What We Offer</h1>
                    <form accept-charset="utf-8" method="post" action="listWhatWeOffer.php">
                        <div class="form-group">
                            <label>Icon Name</label>
                            <input type="text" class="form-control" name="whatweoffer_icon" aria-describedby="whatWeOfferIconHelp" placeholder="Type Icon Code Here">
                            <small id="whatWeOfferIconHelp" class="form-text text-muted">Search Icon Name From FontAwesome.</small>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="whatweoffer_title" aria-describedby="whatWeOfferTitleHelp" placeholder="Type Title Here">
                            <small id="whatWeOfferTitleHelp" class="form-text text-muted">We'll Type Your Title Here For Show on Title.</small>
                        </div>
                        <div class="form-group">
                            <label>Discription</label>
                            <textarea type="text" id="editor" class="form-control" name="whatweoffer_discription" aria-describedby="whatWeOfferDiscriptionHelp" placeholder="Type Discription Here"></textarea>
                            <small id="whatWeOfferDiscriptionHelp" class="form-text text-muted">We'll Type Your Discription Here If Any.</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="whatweoffer">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

  
<?php include("footer.inc.php"); ?>