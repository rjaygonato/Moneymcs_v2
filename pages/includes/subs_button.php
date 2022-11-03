<!-- <li class="nav-item lh-1 me-3">
    <button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#smallModal" data-backdrop="static" data-keyboard="false" >Subscribed </button>
</li> -->

<button class="btn btn-sm btn-dark nosubscriptions hidden" data-bs-toggle="modal" data-bs-target="#notSubs" data-backdrop="static" data-keyboard="false" >Subscribe Now </button>

<?php
    $conn = $pdo->open();

    try{
        $stmt = $conn->prepare("SELECT * FROM subscriptions WHERE user_id=:user AND status=:status");
        $stmt->execute(['user'=>$admin['id'], 'status'=>1]);
        foreach($stmt as $row){
        
        $status = ($row['status']) ? '<li class="nav-item lh-1 me-3"> <b>Subscribed </b> </li>' : '<li class="nav-item lh-1 me-3"><button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#smallModal" data-backdrop="static" data-keyboard="false" >Subscribe Now </button></li>';

        echo " <div id='substats'> ".$status." </div> ";
        
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    $pdo->close();
?>
