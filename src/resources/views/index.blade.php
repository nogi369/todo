<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  </head>
  <body>
    <header class="header">
      <div class="header__inner">
        <a class="header__logo" href="/">
          Todo
        </a>
      </div>
    </header>
    <main>
      <div class="success">
        <h2 class="success__message">Todoを作成しました</h2>
      </div>
      <div class="todo__content">
        <form class="create-form">
          <div class="create-form__item">
            <input class="create-form__item-input" type="text" name="content">
          </div>
          <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">作成</button>
          </div>
        </form>
        <div class="todo-table">
          <table class="todo-table__inner">
            <tr class="todo-table__row">
              <th class="todo-table__header">Todo</th>
            </tr>
            <tr class="todo-table__row">
              <td class="todo-table__item">
                <form class="update-form">
                  <div class="update-form__item">
                    <input class="update-form__item-input" type="text" name="content" value="test">
                  </div>
                  <div class="update-form__button">
                    <button class="update-form__button-submit" type="submit">更新</button>
                  </div>
                </form>
              </td>
              <td class="todo-table__item">
                <form class="delete-form">
                  <div class="delete-form__button">
                    <button class="delete-form__button-submit" type="submit">削除</button>
                  </div>
                </form>
              </td>
            </tr>
            <tr class="todo-table__row">
              <td class="todo-table__item">
                <form class="update-form">
                  <div class="update-form__item">
                    <input class="update-form__item-input" type="text" name="content" value="test2">
                  </div>
                  <div class="update-form__button">
                    <button class="update-form__button-submit" type="submit">更新</button>
                  </div>
                </form>
              </td>
              <td class="todo-table__item">
                <form class="delete-form">
                  <div class="delete-form__button">
                    <button class="delete-form__button-submit" type="submit">削除</button>
                  </div>
                </form>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </main>
  </body>
</html>

<!-- <div class="list__group">
  <div class="list__group-title">
    <h2 class="title">Todo</h2>
  </div>
  <div class="list__group-content">
    <ul class="list">
      <li class="list__item">
        <span class="list__item-label">test</span>
        <button class="list__item-button--update">更新</button>
        <button class="list__item-button--delete">削除</button>
      </li>
      <li class="list__item">
        <span class="list__item-label">test</span>
        <button class="list__item-button--update">更新</button>
        <button class="list__item-button--delete">削除</button>
      </li>
    </ul>
  </div>
</div> -->