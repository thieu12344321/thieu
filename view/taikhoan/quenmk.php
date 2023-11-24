<style>
    .register-form {
    margin: auto;
    width: 400px;
    padding: 2rem;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 7px;
}

.register-form h2 {
    margin-bottom: 1.5rem;
    text-align: center;
}

.input-row {
    margin-bottom: 1.5rem;
}
.input-row input {
    width: 100%;
    border: 1px solid #ccc;
    height: 40px;
    line-height: 40px;
    padding: 0 1rem;
    outline: none;
    transition: all 0.3s ease-out;
}
.input-row input:focus {
    border: 1px solid #00bfa6;
    outline: none;
}
.input__note textarea {
    width: 100%;
    min-height: 200px;
    border: 1px solid #ccc;
    user-select: none;
    resize: none;
    padding: 1rem;
}
.input__note textarea:focus {
    border: 1px solid #00bfa6;
}
.input-row {
    position: relative;
}
.input-row:last-child {
    margin-bottom: 0;
}
.input-row.success input {
    border-color: #2ecc71;
}
.input-row.error input {
    border-color: #e74c3c;
}
.input-row small {
    color: #e74c3c;
    position: absolute;
    bottom: -20px;
    left: 0;
    visibility: hidden;
    font-size: 12px;
}
.input-row.error small {
    visibility: visible;
}



</style>


   
                
                <div class="register-form">

                    <form action="index.php?act=quenmk" method="post">
                        <div class="input-row">
                            
                            <input placeholder="Email" type="email" name="email" >
                        </div>
                        
                        <div class="input-row">
                            <input type="submit" value="Gửi" name="guiemail">
                            
                        </div>
                        <div class="input-row">
                            
                            <input type="reset" value="Nhập lại">
                        </div>
                        <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }   
                    ?>
                     </h2> 
                    </form>
                    
                </div>
            
            
        
