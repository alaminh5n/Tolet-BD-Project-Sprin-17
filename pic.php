<?php
                session_start();
                $ud= $_SESSION['userid'];
                if(isset($_POST['image'])){
                    if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
                    {
                        echo '<script type="text/javascript">alert("Please Select an Image.");</script>';
                        include('profile.php');
                    }
                    else
                    {
                        $image = addslashes($_FILES['image']['tmp_name']);
                        $name = addslashes($_FILES['image']['name']);
                        $image = file_get_contents($image);
                        $image = base64_encode($image);
                        saveimage($name,$image);
                    }
                    function saveimage()
                    {
                        include('config.php');
                        
                        $sql="INSERT INTO propic (userid,image) values ('$ud','$image')";
                        $res=mysqli_query($con,$sql);
                        
                        if($res)
                        {
                            echo '<script type="text/javascript">alert("Image Uploade!!");</script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("Image not Uploade!!");</script>';
                        }
                    }
                        
                }
            ?>