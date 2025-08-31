<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwipeMatch - ダッシュボード</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-handshake me-2"></i>SwipeMatch
            </a>
            <div class="navbar-nav ms-auto">
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">
                        <i class="fas fa-sign-out-alt me-2"></i>ログアウト
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            <i class="fas fa-tachometer-alt me-2"></i>ダッシュボード
                        </h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">ようこそ、SwipeMatchへ！</p>
                        <p class="card-text">ここにスワイプ機能やマッチング機能が実装されます。</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="fas fa-briefcase fa-3x text-primary mb-3"></i>
                                        <h5 class="card-title">求人をスワイプ</h5>
                                        <p class="card-text">新卒求人を右矢印・左矢印で評価</p>
                                        <a href="#" class="btn btn-primary">開始</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="fas fa-heart fa-3x text-danger mb-3"></i>
                                        <h5 class="card-title">マッチした求人</h5>
                                        <p class="card-text">Likeした求人の一覧</p>
                                        <a href="#" class="btn btn-outline-danger">確認</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <i class="fas fa-user fa-3x text-success mb-3"></i>
                                        <h5 class="card-title">プロフィール</h5>
                                        <p class="card-text">プロフィールの編集</p>
                                        <a href="#" class="btn btn-outline-success">編集</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
