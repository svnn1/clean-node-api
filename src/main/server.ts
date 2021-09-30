import { MongoHelper } from '../infra/database/mongodb/mongo-helper'
import app from './config/app'

import env from './config/env'

MongoHelper.connect(env.mongoUrl)
  .then(async () => {
    app.listen(env.port, () => console.log(`Server running at http://localhost:${env.port}`))
  })
  .catch((error) => console.error(error))
