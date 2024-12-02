<div class="rowcenter">    
        <div class="col-16">
            <p class="textlabel">MONDAY</p>
            <?php
            $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
            
                foreach ($days as $day) {
                echo '<div class="col-16">';
                echo "<p class='textlabel'>$day</p>";
                
                $stmt = $conn->prepare("SELECT min(sched_startime), max(sched_endtime) FROM schedules WHERE day = ?");
                $stmt->bind_param("s", $day);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    $start_time = $row['min(sched_startime)'];
                    $end_time = $row['max(sched_endtime)'];
                    if ($start_time && $end_time) {
                        echo "<p>Schedule: " . date('h:i A', strtotime($start_time)) . " - " . date('h:i A', strtotime($end_time)) . "</p>";
                    } else {
                        echo "<p>No schedule for $day</p>";
                    }
                }
                } else {
                    echo "<p>No schedule for $day</p>";
                }

                echo '</div>';
                $stmt->close();
            }

            $conn->close();
            ?>
        </div>
        <div class="col-16">
            <p class="textlabel">TUESDAY</p>
            
        </div>
        <div class="col-16">
            <p class="textlabel">WEDNESDAY</p>
        </div>
        <div class="col-16">
            <p class="textlabel">THURSDAY</p>
        </div>
        <div class="col-16">
            <p class="textlabel">FRIDAY</p>
        </div>
        <div class="col-16">
            <p class="textlabel">SATURDAY</p>
        </div>
</div>