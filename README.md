# planner  
  
  

### This is php-frame build by myself and refer ci frame self build php-MVC frame work refer to : [original address](http://www.awaimai.com/128.html#1MVC )  


### directory
    1. app :user delelop directory , include mvc  
    2. config : config document  
    3. runtime : maybe to record the bugs show 
	4. system : system main document 
	5. test　: some test during my development 
	6. index.php : entry document 


### name rules:
* controllers　　file:Test.php  class:class Test{}
* models		file:Test_model.php  class:class Test_model{}
* system core documents	 file:Test_core.php  class: class Test_core{}
* views	
* self-define libraries	 file:test_lib.php 	class : class test_lib{}

  

### 构建思路描述
```
index.php入口文件,每个请求都要从index.php进行分发,文件中配置基础变量,

引入分发布置库和配置文件,配置文件配置用户个性信息,布置库引入处理文件,

处理文件进行route的路劲分发,不同环境开发的配置,特殊字符串的过滤,不引入

类实例化的路径等配置,算是基础的环境配置好了,之下的c,v,m的拓展,可以靠自

己在上述起作用的环境下进行开发了,上述的环境都起作用,因为是一直引入的,

所以哇,都在一个脚本内实际上哈哈,上上述的配置又在上头,所以喽
```



### 方法
	* model
		在自己模型中调用数据库方法:$this->db->execute()...需要继承Plan_Model
		命名必须User_model.php[document]    User_model[class name]

	* view

	* controller
		加载视图:$this->view->assign('view/path',[$arr,传递的数据,可以省略,不传数据]);
		加载模型:$this->plan->load_model('User_model'),usage: $this->User->method();
		引入自己库: $this->plan->load_lib('test_lib')  usage: $this->test->method();
		命名:User.php[document]   User[class name]
	
	* libs
		文件目录可以在index.php定义  
		命名test_lib.php[document]  test_lib[class]

[ModleIory github](https://github.com/ModleIory/planner)



