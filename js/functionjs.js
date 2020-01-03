
            var g_project_id = '';

            $(document).ready(function() {
                $(".groupdetails, #createanewProject").hide();
            });

            /*===================================================================================*/

            function felIndex(a, b) {

                var ipafulldef = a || 0,
                    ipadrldef = b || 0;
                var classNam = '.porFelf',
                    texrclass = '.porFelfttl';
                /*  for a =================================================================*/
                /*BEST (Blue) */
                if (ipafulldef >= 3 && ipafulldef <= 4.75) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("BEST");
                }

                /*Best Practical (Blue) */
                if (ipafulldef >= 3.75 && ipafulldef <= 4.75) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("Best Practical");
                }

                /* Good (Green) */
                if (ipafulldef >= 4.76 && ipafulldef <= 6.05) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Good");
                }

                /*Fair (Yellow) */
                if (ipafulldef >= 6.06 && ipafulldef <= 7.35) {
                    $(classNam).css("background-color", "yellow");
                    $(texrclass).text("Fair");
                }

                /*Poor  (Orange) */
                if (ipafulldef >= 7.36 && ipafulldef <= 8.45) {
                    $('#porFelf').css("background-color", "orange");
                    $(texrclass).text("Poor");
                }

                /*Screening Study (Red) */
                if (ipafulldef >= 8.46 && ipafulldef <= 12) {
                    $('#porFelf').css("background-color", "red");
                    $(texrclass).text("Screening Study ");
                }

                /* for b ===============================================================*/

                /*BEST (Blue) */
                classNam = '.porFelW', texrclass = '.porFelwttl';

                if (ipadrldef >= 3 && ipadrldef <= 4.75) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("BEST");
                }

                /*Best Practical (Blue) */
                if (ipadrldef >= 5.0 && ipadrldef <= 6.0) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("Best Practical");
                }

                /* Good (Green) */
                if (ipadrldef >= 4.76 && ipadrldef <= 5.75) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Good");
                }

                /*Fair (Yellow) */
                if (ipadrldef >= 5.76 && ipadrldef <= 6.75) {
                    $(classNam).css("background-color", "yellow");
                    $(texrclass).text("Fair");
                }

                /*Poor  (Orange) */
                if (ipadrldef >= 6.76 && ipadrldef <= 7.75) {
                    $(classNam).css("background-color", "orange");
                    $(texrclass).text("Poor");
                }

                /*Screening Study (Red) */
                if (ipadrldef >= 7.76 && ipadrldef <= 12) {
                    $('#porFelf').css("background-color", "red");
                    $(texrclass).text("Screening Study ");
                }
            }

            function checkreportpagecostindex(a, b) {

                classNam = '.porCostf', texrclass = '.porCostfttl';
                /* Better/Competitive: <1.05 */
                if (a <= 1.4) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Better");
                }

                /* Average: 1.05-1.25 */
                if (a >= 1.05 && a <= 1.25) {
                    $(classNam).css("background-color", "yellow");
                    $(texrclass).text("Average");
                }

                /* Worse/Not Competitive: >1.25 */
                if (a >= 1.25) {
                    $(classNam).css("background-color", "rad");
                    $(texrclass).text("Worse");
                }

                /* for b=====================================*/
                classNam = '.porCostfw', texrclass = '.porCostfttlw';
                /* Better/Competitive: >1.05 */
                if (b <= 1.4) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("BEST");
                }

                /* Average: 1.05-1.25 */
                if (b >= 1.05 && b <= 1.25) {
                    $(classNam).css("background-color", "blue");
                    $(texrclass).text("Best Practical");
                }

                /* Worse/Not Competitive: >1.25 */
                if (b >= 1.25) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Worse");
                }

            }

            // This function complear valu between 1.05 t0 >1.25 reang   

            function smallcom(a, classNam, texrclass) {
                /* Better/Competitive: <1.05 */
                if (a <= 1.4) {
                    $(classNam).css("background-color", "green");
                    $(texrclass).text("Better");
                }

                /* Average: 1.05-1.25 */
                if (a >= 1.05 && a <= 1.25) {
                    $(classNam).css("background-color", "yellow");
                    $(texrclass).text("Average");
                }

                /* Worse/Not Competitive: >1.25 */
                if (a >= 1.25) {
                    $(classNam).css("background-color", "rad");
                    $(texrclass).text("Worse");
                }
            }

            /*  all project section  will check cooe box ==========================================*/
            function coloebox(a) {
                /* Better/Competitive: <1.05 */
                if (a <= 1.5) {
                    return '<span class="cBetter" title="Better">&nbsp;</span>' + a.toFixed(2);
                }

                /* Average: 1.05-1.25 */
                if (a >= 1.05 && a <= 1.25) {
                    return '<span class="cAverage" title="Average">&nbsp;</span>' + a.toFixed(2);
                }

                /* Worse/Not Competitive: >1.25 */
                if (a >= 1.25) {
                    return '<span class="cWorse" title="Worse">&nbsp;</span>' + a;
                }
            }

            /*===================================================================================*/
            function myFunction() {
                var a = document.getElementById("createanewProject");
                var x = document.getElementById("reportgrid");
                var y = document.getElementById("projectgrid");
                var z = document.getElementById("myDIV");
                x.style.display = "none";
                y.style.display = "none";
                a.style.display = "none";
                z.style.display = "block";
            }

            function colorindicator() {

            }

            function callfunction(projectid) {
                var a = document.getElementById("createanewProject");
                var x = document.getElementById("reportgrid");
                var y = document.getElementById("projectgrid");
                var z = document.getElementById("myDIV");
                a.style.display = "none";
                x.style.display = "none";
                y.style.display = "block";
                z.style.display = "none";
                //$(classNam).append(projectid);

                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "	http://54.236.4.195/api/dashboard.php",
                    "method": "POST",
                    "headers": {
                        "Accept": "*/*",
                        "Cache-Control": "no-cache",
                         "Host": "54.236.4.195",
                        "Accept-Encoding": "gzip, deflate",
                        "Content-Length": "0",
                        "Connection": "keep-alive",
                        "cache-control": "no-cache"
                    }
                }

                $.ajax(settings).done(function(report) {
                    var i, text = "",
                        rowTableData = "";
                    felIndex(report[0].ipafulldef, report[0].ipadrldef);
                    console.log(responses);

                });

            }

            /* change by nixon */
            function getreport(projectID) {
                var x = document.getElementById("reportgrid");
                var y = document.getElementById("projectgrid");
                var z = document.getElementById("myDIV");
                x.style.display = "block";
                y.style.display = "none";
                z.style.display = "none";
                projectWiseReport(projectID);

            }

            function createanewProject() {
                var a = document.getElementById("createanewProject");
                var x = document.getElementById("reportgrid");
                var y = document.getElementById("projectgrid");
                var z = document.getElementById("myDIV");
                x.style.display = "none";
                y.style.display = "none";
                z.style.display = "none";
                a.style.display = "block";

            }

            function projectlist(projectID) {
                g_project_id = projectID;
                $('.nav-menu a[href="#menu1"]').tab('show');
                callfunction(projectID);
                //getWorkBookInfo(projectID);
            }

            
                $(window).load(function(){
            	$('a[rel=popover]').popover({
            		html: 'true',
            	placement: 'top'
            	})
                });