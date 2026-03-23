<?

namespace src\views;

class View
{
    private $layout;

    public function __construct(string $layout)
    {
        $this->layout = $layout;
    }
    public function renderHTML(
        string $viewName,
        array $vars = [],
        int $code = 200
    ): void {
        http_response_code($code);
        $layoutFile =
            "layouts/{$this->layout}.php";
        $content = $this->renderFile(
            $viewName,
            $vars
        );
        $fileVars = ['content' => $content];
        echo $this->renderFile($layoutFile, $fileVars);
    }

    public  function renderFile(
        string $fileName,
        array $vars
    ) {
        extract($vars);
        $fileName = __DIR__ . '/' . $fileName;
        if (file_exists($fileName)) {
            ob_start();
            include $fileName;
            $buffer = ob_get_contents();
            ob_get_clean();
            return $buffer;
        } else {
            echo "не найден  $fileName";
        }
    }
}
