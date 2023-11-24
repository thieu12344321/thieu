<style>
    .shadow-md{
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    }

    .register-form1 {
        padding-bottom: -50px;
        margin: auto;
        margin-right: auto;;
        margin-bottom : 10rem;
        width: 350px;
        padding: 1rem;
      
        /* box-shadow: 0 0 30px rgba(0, 0, 0, 0.1); */
        background-color: #fff;
        border-radius: 7px;
    }

    .register-form1 h2 {
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .input-row1 {
        margin-bottom: 1.5rem;
    }

    .input-row1 input {
        width: 100%;
        border: 1px solid #ccc;
        height: 40px;
        line-height: 40px;
        padding: 0 1rem;
        outline: none;
        transition: all 0.3s ease-out;
    }

 
</style>
<div class="row mb">
    
            <div  border="1" class="register-form1 shadow-md" >
                <h2>Đăng Nhập</h2>

            <form action="index.php?act=dangnhap" method="post">
            <div class="input-row1">
                <input type="text" placeholder="Tên Đăng Nhập" name="user" id="username" autocomplete="off" required />
               
            </div>
            <div class="input-row1">
                <input type="password" placeholder="Mật Khậu" name="pass" id="phone" autocomplete="off" required />
               
            </div>
            
            <div class="input-row1">
                <input type="submit" name="dangnhap" value="Đăng Nhập">
                
            </div>

            <li> <a href="index.php?act=quenmk"> Quên mật khẩu</a>
        </li>
        <li> <a href="index.php?act=dangky"> Đăng ký thành viên</a>
        </li>
        </form>


            </div>
        
        
    </div>